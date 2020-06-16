<?php

namespace app\modules\administrator\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\modules\administrator\models\LoginForm;
use app\modules\administrator\models\UserSearch;
use app\modules\administrator\models\Register;
use app\modules\administrator\models\UserProfile;
use app\modules\administrator\models\User;
use app\modules\administrator\models\PasswordResetRequest;
use app\modules\administrator\models\ResetPassword;
use app\modules\administrator\models\ChangePassword;
use yii\web\UploadedFile;
use yii\db\Query;


class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => \app\components\AccessRule::className(),
                ],
                'only' => ['index', 'user-index', 'register', 'user-update', 'user-profile', 'user-profile-update', 'change-password', 'logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'user-profile', 'user-profile-update', 'request-password-reset', 'reset-password', 'change-password', 'logout'],
                        'allow' => true,
                        'roles' => [\app\modules\administrator\models\User::ROLE_USER, \app\modules\administrator\models\User::ROLE_ADMIN],
                    ],
                    [
                        'actions' => ['user-index', 'register', 'user-update'],
                        'allow' => true,
                        'roles' => [
                            \app\modules\administrator\models\User::ROLE_ADMIN
                        ],                        
                    ],                    
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
     * Login action.
     *
     * @return Response|string
     */
    public function actionUserIndex()
    {
        $searchModel = new UserSearch();
        $searchModel->status = 10;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('user-index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionRegister()
    {
        $model = new Register();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if ($user = $model->register()) {
                \Yii::$app->session->setFlash('success', 'User baru berhasil dibuat.');
                return $this->redirect(['user-index']);
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    
    public function actionUserUpdate($id)
    {
        $model = User::findOne($id);
        if ($model->load(Yii::$app->getRequest()->post()) && $model->save()) {
            \Yii::$app->session->setFlash('success', 'Data berhasil diperbarui.');
            return $this->redirect(['user-index']);
        }

        return $this->render('user-update', [
            'model' => $model,
        ]);
    }

    public function actionUserProfile($id)
    {
        $model =  UserProfile::findOne($id);

        return $this->render('user-profile', [
            'model' => $model,
        ]);
    }

    public function actionUserProfileUpdate($id)
    {
        $model = UserProfile::findOne($id);
        $model->scenario = 'update';
        $oldFile = $model->getImageFile();
        $oldPhoto = $model->avatar;
        
        if ($model->load(Yii::$app->request->post())) {
            $image = $model->uploadImage();
            if ($image === false) {
                $model->avatar = $oldPhoto;
            }

            if ($model->save()) {
                if ($image !== false) { 
                    $path = $model->getImageFile();
                    $image->saveAs($path);
                }
                return $this->redirect(['user-profile', 'id' => $model->id]);
            } 
        } else {
            return $this->render('user-profile-update', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogin()
    {
        $this->layout = 'login-layout';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
             return $this->goBack();
        }
        return $this->render('/administrator/user/login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }

    /**
     * Request reset password
     * @return string
     */
    public function actionRequestPasswordReset()
    {
        $this->layout = 'login-layout';
        $model = new PasswordResetRequest();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Periksa email Anda untuk instruksi lebih lanjut.');
                return $this->redirect(['/administrator/user/login']);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Maaf, kami tidak dapat mereset password untuk email terkait.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                'model' => $model,
        ]);
    }

    /**
     * Reset password
     * @return string
     */
    public function actionResetPassword($token)
    {
        // $this->layout='@app/views/layouts/loginlayout.php';
        $this->layout = 'login-layout';
        try {
            $model = new ResetPassword($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'Password baru berhasil disimpan.');

            return $this->redirect(['/administrator/user/login']);
        }

        return $this->render('resetPassword', [
                'model' => $model,
        ]);
    }

    /**
     * Reset password
     * @return string
     */
    public function actionChangePassword()
    {
        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->redirect(['user-profile', 'id' => Yii::$app->user->identity->id]);
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }
}

