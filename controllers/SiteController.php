<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\ContactForm;
use app\modules\administrator\models\Slider;
use app\modules\administrator\models\CompanyInfo;
use app\modules\administrator\models\Expert;
use app\modules\administrator\models\Service;
use app\modules\administrator\models\Project;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $sliders = Slider::find()->where(['publish' => Project::PUBLISHED])->orderBy('order ASC')->asArray()->all();
        $infos = Slider::find()->where(['publish' => Slider::PUBLISHED])->asArray()->all();
        $experts = Expert::find()->where(['publish' => Expert::PUBLISHED])->orderBy('order ASC')->asArray()->all();
        return $this->render('index', [
            'sliders' => $sliders,
            'infos' => $infos,
            'experts' => $experts,
        ]);
    }   

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $company_info = CompanyInfo::find()->asArray()->limit(1)->all();
        $info = $company_info[0];
        return $this->render('about', [
            'info' => $info,
        ]);
    }

    /**
     * Displays our expert page.
     *
     * @return string
     */
    public function actionExpert()
    {
        $experts = Expert::find()->where(['publish' => Expert::PUBLISHED])->orderBy('order ASC')->asArray()->all();
        return $this->render('expert', [
            'experts' => $experts,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return string
     */
    public function actionServices()
    {
        $services = Service::find()->where(['publish' => Service::PUBLISHED])->orderBy('order ASC')->asArray()->all();
        return $this->render('services', [
            'services' => $services,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return string
     */
    public function actionServiceDetail($id)
    {
        $service = Service::find()->where(['slug' => $id, 'publish' => Service::PUBLISHED])->one();
        return $this->render('service-detail', [
            'service' => $service,
        ]);
    }

    /**
     * Displays project page.
     *
     * @return string
     */
    public function actionProject()
    {
        $markers = [];
        $query = Project::find()->where(['publish' => Project::PUBLISHED]);
        $projects = $query->orderBy('order ASC')->asArray()->all();
        $clients = $query->select('client_name')->distinct()->all();
        foreach ($projects as $project) {
            list($lat, $lng) = explode(',', $project['location_coordinates']);
            $markers[] = ['name' => $project['client_name'], 'latLng' => [$lat, $lng], 'description' => 'Study Type: ' . $project['study_type'] . '<br>Region: ' . $project['region'] . '<br>Commodity: ' . $project['commodity']];
        }        
        return $this->render('project', [
            'markers' => $markers,
            'clients' => $clients,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $company_info = CompanyInfo::find()->asArray()->limit(1)->all();
        $info = $company_info[0];
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['supportEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'info' => $info,
        ]);
    }
}
