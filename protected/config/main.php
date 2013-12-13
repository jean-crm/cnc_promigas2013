<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'PROMIGAS', //propuesta de guardado
    'language' => 'es',
//    'locale'=>'es',
    'sourceLanguage' => 'en',
    'charset' => 'utf-8',
    // preloading 'log' component
    'preload' => array('log'),
    'theme' => 'bootstrap',
//    'theme' => 'classic',
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.vendors.phpexcel.PHPExcel',
        ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            //generador custom
            'generatorPaths' => array('application.modules.gii'),
            ),
        ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                'post/<id:\d+>/<title:.*?>' => 'post/view',
                'posts/<tag:.*?>' => 'post/index',
                // REST patterns
                array('api/list', 'pattern' => 'api/<model:\w+>', 'verb' => 'GET'),
                array('api/view', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'GET'),
                array('api/update', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'PUT'),
                array('api/delete', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'DELETE'),
                array('api/create', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
                // Other controllers
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ),
            ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=encues2_promigas',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'Asdf1234', /* localhost */
//           'password' => '20cnc11',/*192.168.0.18*/
//            'username' => 'encues2_webmaste',
//            'password' => 'cnc_web',
            'charset' => 'utf8',
            ),
        'coreMessages' => array(
            'basePath' => 'protected/messages'
            ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
            ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    ),
                ),
            ),
        //NUEVO PARA RBAC
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
        ), //FIN PARA RBAC
        //INICIO Cookie Attack Prevention
        'request' => array(
            'enableCookieValidation' => true,
            ),
    //FIN Cookie Attack Prevention
    //nuevo TUNING PRODUCCION
//        'session' => array(
//            'class' => 'CCacheHttpSession',
//        ),
//        'cache' => array(
//            'class' => 'CApcCache',
//        ),
        ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
'params' => array(
        // this is used in contact page
    'adminEmail' => 'asalazar@cnccol.com',
    'nombreEncuesta' => 'PROMIGAS',
    ),
);