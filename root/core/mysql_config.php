<?php 

	// mysql config
	// define('MYSQL_SERVER_NAME','localhost');
	// define('MYSQL_USERNAME','xxx');
	// define('MYSQL_PASSWORD','xxx');
	// define('MYSQL_DATABASE','xxx');

	if(defined('MYSQL_USERNAME')){
		// hostker
		define('MYSQL_SERVER_NAME','localhost');
	}else{
		// localhost
	}
?>