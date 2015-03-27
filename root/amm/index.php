<?php 

	include_once('base.php');

	// $http->views('index');
	
    // $sql=new expeditionInfoSql();
    // $html = new htmlHelper();

    // $list=$sql->getList();

    // $http->json($list);



 //    $sql=new dataVersionSql();
 //    $html = new htmlHelper();
	// // $sql->updateItemVer(1,'1.0');
 //    $list=$sql->getList();

 //    $http->json($list);


    $cache=new cacheMethod();
    $result=$cache->get();

    $http->json($result);
 ?>