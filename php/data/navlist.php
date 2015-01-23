<?php 

	include_once('../base.php');

	$navSliderSql=new navSliderSql();
	$result=$navSliderSql->getList();
	

	$http->json($result);
?>