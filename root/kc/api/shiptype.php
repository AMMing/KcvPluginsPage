<?php 

	include_once('../base.php');

    $sql=new kcShipTypesSql();
    $result=$sql->getList();

    $http->json($result);
 ?>