<?php 

    $downloadRecordSql=new downloadRecordSql();
    $html = new htmlHelper();

    $result_soft=$downloadRecordSql->getDownloadCount();
    $result_ver=$downloadRecordSql->getDownloadCountAll();

    function WriteTable($result){
        echo "<table><tr><th>Name</th><th>Count</th></tr>";
        foreach ($result as $item) {
            echo "<tr><td>".$item->name."</td><td>".$item->downloadCount."</td></tr>";
        }
        echo "</table>";
    }

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>download count</title>
    <style type="text/css">
        * {
            font-family:Microsoft YaHei;
            margin: 0;
            padding: 0;
        }
        .main{
            width: 500px;
            margin: 50px auto;
        }
        td{
            border-top: 1px solid #C5C5C5;
            color: #0885FF;
            text-align: center;
            line-height: 26px;
        }
        tr td:first-child{
            border-right: 1px solid #C5C5C5;
            text-align: left;
        }
        tr th{
            color: #0067CB;
        }
        tr th:first-child{
            min-width:350px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h3>Soft Download Count</h3>
        <?php WriteTable($result_soft); ?>
        <div></div>
        <br>
        <br>
        <h3>Version Download Count</h3>
        <?php WriteTable($result_ver); ?>
    </div>
</body>
</html>
