<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'name'=>'AKA Geosains Consulting',
    'timeZone' => 'Asia/Jakarta',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        // 'admin' => [
        //     'class' => 'mdm\admin\Module', 
        //     'layout' => '@app/modules/administrator/views/layouts/main.php',          
        // ],
        'administrator' => [
            'class' => 'app\modules\administrator\Administrator',
            'layout' => '@app/modules/administrator/views/layouts/main.php',
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],

        'imagemanager' => [
            'class' => 'noam148\imagemanager\Module',
            //set accces rules ()
            'canUploadImage' => true,
            'canRemoveImage' => function(){
                return true;
            },
            'layout' => '@app/modules/administrator/views/layouts/main.php',
            'deleteOriginalAfterEdit' => false, // false: keep original image after edit. true: delete original image after edit
            // Set if blameable behavior is used, if it is, callable function can also be used
            'setBlameableBehavior' => false,
            //add css files (to use in media manage selector iframe)
            'cssFiles' => [
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
            ],
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'sort' => [
            'class' => '\arogachev\sortable\controllers\SortController',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'D84937FCF3B41B54C7EA54D67E932',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\User',
        //     'enableAutoLogin' => true,
        // ],
        'user' => [
            'identityClass' => 'app\modules\administrator\models\User',
            'loginUrl' => ['/administrator/user/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        
        'imagemanager' => [
            'class' => 'noam148\imagemanager\components\ImageManagerGetPath',
            'mediaPath' => 'img/imagemanager',
            'cachePath' => 'assets/images',
            'useFilename' => true,
            'absoluteUrl' => true,
            'databaseComponent' => 'db'
        ],

        'db' => $db,
        'urlManager' => [
            'class' => 'yii\web\UrlManager',           
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => [                
                'home' => 'site/index',
                'about'=>'site/about',   
                'expert' => 'site/expert',
                'services' => 'site/services',
                'news' => 'site/news', 
                'project' => 'site/project',
                'contact' => 'site/contact',
                'service-detail/<id:[\w\-]+>' => 'site/service-detail',
                'exploration' => 'site/exploration',             
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                // '<action:(.*)>' => 'site/<action>',              
            ],
        ],
        // 'view' => [
        //     'theme' => [
        //         'basePath' => '@app/themes/consulting',
        //         'baseUrl' => '@web/themes/consulting',
        //         'pathMap' => [
        //             '@app/views' => '@app/themes/consulting',
        //         ],
        //     ],
        // ],
        
        'assetManager' => [
            'bundles' => [
              'yii\bootstrap\BootstrapAsset' => [
                    'sourcePath' => '@vendor/twbs/bootstrap/dist',
                    'css' => ['css/bootstrap.min.css']
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'sourcePath' => '@vendor/twbs/bootstrap/dist',
                    'js' => ['js/popper.min.js', 'js/bootstrap.min.js']
                ],
            ]
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'locale' => 'id',
            'thousandSeparator' => ".",
            'decimalSeparator' => ",",
            'currencyCode' => 'Rp ',
        ],
    ],
    'params' => $params,
    // 'as access' => [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         // '*',
    //         'site/*',
    //         'admin/user/request-password-reset',
    //         // 'some-controller/some-action',
    //         // The actions listed here will be allowed to everyone including guests.
    //         // So, 'admin/*' should not appear here in the production, of course.
    //         // But in the earlier stages of your development, you may probably want to
    //         // add a lot of actions here until you finally completed setting up rbac,
    //         // otherwise you may not even take a first step.
    //     ]
    // ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [ // setting templates
                    // 'material-design' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design/crud',
                    // 'material-design-h' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h/crud', 
                    // 'material-design-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-with-icons/crud',
                    // 'material-design-h-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h-with-icons/crud',
                    // 'materializecss' => '@vendor/macgyer/yii2-materializecss/src/gii-templates/generators/crud/materializecss',
                    'my-templates' => '@app/templates/crud/my-templates'
                ]
            ]
        ],
    ];
}

return $config;
