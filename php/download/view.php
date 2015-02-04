<?php 

	include_once('../base.php');

	$downloadRecordSql=new downloadRecordSql();
	$result=$downloadRecordSql->getDownloadCount();

	$http->json($result);
?>