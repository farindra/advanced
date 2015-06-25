<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    /*-ptr.nov- : Public Modules All*/
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module',
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            'i18n' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@kvgrid/messages',
                'forceTranslation' => true
            ],
        ],
		 'v1' => [
            'basePath' => 'lukisongroup/modules/v1',
            'class' => 'api\modules\v1\Module'   // here is our v1 modules
        ]
    ],

    /*-ptr.nov- : Public Components All*/
    'components' => [
        /* Author -ptr.nov- : Test Project  */
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=xxx.xxxx.xxxx.xxxx;dbname=xxxx',
            'username' => 'xxxxx',
            'password' =>'xxxx',
            'charset' => 'utf8',
        ], 
		
		/* Author -ptr.nov- : Admin Menu  */
        'db1' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=202.53.254.83;dbname=dbm0001',
            'username' => 'lgoffice',
            'password' =>'r4h4514',
            'charset' => 'utf8',
        ],
		
		 /* Author -ptr.nov- : HRD | Dashboard I */
        'db2' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=202.53.254.83;dbname=dbm0002',
            'username' => 'lgoffice',
            'password' =>'r4h4514',
            'charset' => 'utf8',
        ],
		
		 /* Author -ptr.nov- : ESM DB_project*/ 
		 
        'db3' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=202.53.254.83;dbname=dbc002',
            'username' => 'lgoffice',
            'password' =>'r4h4514',
            //'dsn' => 'oci:dbname=//10.10.99.3:1521/gosent',
            //'username' => 'gosent',
            //'password' => 'asd123',
            'charset' => 'utf8',
        ],
		
		
		'db4' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=202.53.254.83;dbname=api',
            'username' => 'lgoffice',
            'password' =>'r4h4514',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],

        /*-ptr.nov-: Public Component UrlManager*/
        'urlManager' => [
            'enablePrettyUrl' => true, // Disable r= routes
            'showScriptName' => true, // Disable index.php
            'enableStrictParsing' => false,
            /* 'rules'=>[
              'atrikel'=>'site/artikel',
            ],
            */
        ],
        /*-ptr.nov- : Public AuthManager */
        'authManager'=>[
            'class'=>'yii\rbac\DbManager',
            'defaultRoles' => ['OWNER','KOMISARIS','CEO','GM','MANAGER','SUVERVISOR','DM','STAFF','OPS'],
            //'class'=>'yii\rbac\PhpManager',
            //'defaultRoles' => ['userGroup'],
            //'defaultRoles'=>['generic-user'],
            //'defaultRoles'=>['end-user'],
        ],

        /*-ptr.nov- : Public Permission */
        'as access'=>[
            'class'=>'mdm\admin\components\AccessControl',
            'allowActions'=>[
                '*',
                //'site/login',
                //'site/error',
            ]
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    'lukisongroup/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/phundament/app'
                ],
            ],
        ],

    ],

    /*-ptr.nov- : Public Parm FOND AWSOME*/
    'params' => [ $params,
        'icon-framework' => 'fa',  // Font Awesome Icon framework
    ],

];
