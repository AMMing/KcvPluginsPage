<?php

	// include php files
	define('ROOT_PATH',dirname(dirname(__FILE__)));
	define('CORE_PATH',ROOT_PATH.'/core');
	define('SITE_ROOT_PATH',ROOT_PATH.'/amm');

	include_once(CORE_PATH.'/include.php');

	//http
	$http = new httpHelper();

?>