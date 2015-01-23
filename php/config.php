<?php 

	// system data
	define('ROOT_PATH',dirname(__FILE__));

	define('MysqlServerName','xxxx');
	define('MysqlUsername','xxxx');
	define('MysqlPassword','xxxx');
	define('MysqlDatabase','xxxx');


	// data file path
	define('JsVer', '20150119');

	// database
	$conn=mysql_connect(MysqlServerName,MysqlUsername,MysqlPassword);
	mysql_select_db(MysqlDatabase,$conn);

?>