<?php

namespace app\modules\administrator;

/**
 * administrator module definition class
 */
class Administrator extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\administrator\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {

        parent::init();
        // \Yii::$app->set('user', [
        //     'class' => 'yii\web\User',
        //     'identityClass' => 'mdm\admin\models\User',
        //     'enableAutoLogin' => false,
        //     'loginUrl' => ['/admin/user/login'],
        //     'identityCookie' => ['name' => 'administrator_module', 'httpOnly' => true],
        //     'idParam' => 'admin_id', //this is important !
        // ]); 

        \Yii::$app->errorHandler->errorAction = '/administrator/default/error';
    }
}
