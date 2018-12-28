<?php
date_default_timezone_set("Asia/Bangkok");
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// echo $yii;
// echo '<br>';
// echo $config;
// exit;

error_reporting(-1);
ini_set('display_errors', true);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false );
//show profiler
defined('YII_DEBUG_SHOW_PROFILER') or define('YII_DEBUG_SHOW_PROFILER',true);
//enable profiling
defined('YII_DEBUG_PROFILING') or define('YII_DEBUG_PROFILING',true);
//trace level
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
//execution time
defined('YII_DEBUG_DISPLAY_TIME') or define('YII_DEBUG_DISPLAY_TIME',false);


require_once($yii);
Yii::createWebApplication($config)->run();
