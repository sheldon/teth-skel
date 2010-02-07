<?php
define("SITE_DIR", realpath(dirname(__FILE__)."/../")."/");
$path = pathinfo(SITE_DIR);
define("SITE_NAME", $path['basename']);
define("FRAMEWORK_NAME", "teth");

if(!defined("FRAMEWORK_DIR")) define("FRAMEWORK_DIR", SITE_DIR.FRAMEWORK_NAME."/");
if(!defined("APP_DIR")) define('APP_DIR', SITE_DIR . "app/");
if(!defined("CONTROLLER_DIR")) define('CONTROLLER_DIR', APP_DIR.'controller/');
if(!defined("CONFIG_DIR")) define('CONFIG_DIR' , APP_DIR.'config/');
if(!defined("PUBLIC_DIR")) define('PUBLIC_DIR' , SITE_DIR.'public/');
if(!defined("PLUGIN_DIR")) define('PLUGIN_DIR' , SITE_DIR.'plugins/');

if(function_exists('date_default_timezone_set')){
  if(!defined('PHP_TIMEZONE')) date_default_timezone_set('Europe/London');
  else date_default_timezone_set(PHP_TIMEZONE);
}

require FRAMEWORK_DIR.'TethAutoloader.php';
TethAutoloader::init();
TethAutoloader::go();
?>