<?php 

	include_once('../base.php');

    $sql=new areaTableSql();
    $result=$sql->getList();

    $http->json($result);
 ?>