<?php 

	include_once('base.php');

	// $http->views('index');
	
    // $sql=new expeditionInfoSql();
    // $html = new htmlHelper();

    // $list=$sql->getList();

    // $http->json($list);



    $sql=new dataVersionSql();
    $html = new htmlHelper();
	$sql->updateItem(1);
    $list=$sql->getList();

    $http->json($list);
 ?>