<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../../../BitNami/wampstack-5.4.13-1/apache2/htdocs/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
