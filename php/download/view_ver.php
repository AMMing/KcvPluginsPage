<?php 

	include_once('../base.php');

	$downloadRecordSql=new downloadRecordSql();
	$result=$downloadRecordSql->getDownloadCountAll();

	$http->json($result);
?>