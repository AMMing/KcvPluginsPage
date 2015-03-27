<?php 
    header("Content-Type: text/html; charset=utf-8");

    $shipTypesSql=new shipTypesSql();
    $html = new htmlHelper();

    $shipTypes_list=$shipTypesSql->getList();

    $http->json($shipTypes_list);
?>