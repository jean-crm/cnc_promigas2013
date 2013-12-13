<?php

//// change the following paths if necessary
$yii = dirname(__FILE__) . '/../yii/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';
//
//// remove the following lines when in production mode
if (($_SERVER['REMOTE_ADDR'] == '::1') || ($_SERVER['REMOTE_ADDR']) == '127.0.0.1')//localmente se carga
defined('YII_DEBUG') or define('YII_DEBUG', true);
//// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
//do not run app before register YiiExcel autoload
$app = Yii::createWebApplication($config);

Yii::import('ext.yiiexcel.YiiExcel', true);
Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);

//se setea la muestra
/*$c=new CDbCriteria();
$c->group='cod_empleado';
Yii::app()->params['muestra'] = Encuesta::model()->count($c);*/
//Now you can run application
$app->run();
