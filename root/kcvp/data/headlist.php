<?php 

	include_once('../base.php');

	$headSliderSql=new headSliderSql();
	$result=$headSliderSql->getList();
	

	$http->json($result);
?>