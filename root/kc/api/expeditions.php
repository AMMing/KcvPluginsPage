<?php 

	include_once('../base.php');

    $cache=new cacheMethod();
    $result=$cache->get();

    $http->json($result);
 ?>