<?php

namespace app\modules\administrator\controllers;

use yii\web\Controller;

/**
 * Default controller for the `administrator` module
 */
class DefaultController extends Controller
{
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->redirect(['/administrator/company-info']);
    }
}
