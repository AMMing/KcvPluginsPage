<?php 

	include_once('../base.php');

    $sql=new shipTypesSql();
    $result=$sql->getList();

    $http->json($result);
 ?>