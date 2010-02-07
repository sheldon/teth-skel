<?php

define("SITE_DIR", realpath(dirname(__FILE__)."/../")."/");
require SITE_DIR.'/teth/TethAutoloader.php';
TethAutoloader::init();
TethAutoloader::go();
?>