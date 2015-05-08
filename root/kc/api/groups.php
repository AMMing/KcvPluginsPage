<?php 

	include_once('../base.php');

    $sql=new groupShipTypesSql();
    $result=$sql->getList();

    $http->json($result);
 ?>