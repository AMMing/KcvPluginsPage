<?php 

	include_once('base.php');

	// $http->views('index');
	
    $shipTypesSql=new shipTypesSql();
    $html = new htmlHelper();

    $shipTypes_list=$shipTypesSql->getList();

    $http->json($shipTypes_list);
 ?>