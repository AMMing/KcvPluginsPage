<?php 

    $shipTypesSql=new shipTypesSql();
    $html = new htmlHelper();

    $shipTypes_list=$shipTypesSql->getList();

    print_r($shipTypes_list);
?>