<?php 

    $pageInfoSql=new pageInfoSql();
    $page_data=$pageInfoSql->getItem(1);

    $logsTableSql=new logsTableSql();
    $logs_list=$logsTableSql->getList();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $page_data->headTitle; ?></title>
    <link rel="shortcut icon" href="icon.jpg">
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/data/style.php" rel="stylesheet" />
    <meta name="keywords" content="<?php echo $page_data->headKeyword; ?>" />
    <meta name="Description" content="<?php echo $page_data->headDes; ?>" />


</head>
<body>
    <div class="main">
        <div class="main_nav">
            <div class="bg">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <span class="current">首页</span>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="top_space"></div>
        <div class="main_content">
            <div class="content_frame">
                <div class="head">
                    <div class="bg pic">
                        <div class="title">
                            Tilte
                        </div>
                    </div>
                    <div class="avatar">
                        <div class="img pic">
                            <div class="title">
                                MapleWorld
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <!-- title -->
                    <h2><?php echo $page_data->title; ?></h2>
                    <div class="date">
                        <!-- updatetime -->
                        <?php echo $page_data->updatetime; ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="brief">
                    <!-- brief -->
                    <?php echo $page_data->brief; ?>
                </div>
                <div class="content">
                    <article>
                        <div>
                            <!-- content -->
                            <?php echo $page_data->content; ?>
                            <!-- function start -->
                            <h4>主要功能</h4>
                            <?php
                                $softSql=new softSql();
                                $soft_list=$softSql->getListNotKcvp();

                                foreach ($soft_list as $soft_item) {
                                    $functionsTableSql=new functionsTableSql();
                                    $func_list=$functionsTableSql->getListBySoftId($soft_item->Id);
                            ?>
                            <div>
                                <ul>
                                    <li><?php echo $soft_item->name; ?></li>
                                </ul>
                                <ol class="mleft30">
                                <?php foreach ($func_list as $func_item) { ?>
                                    <li><?php echo $func_item->content; ?></li>
                                <?php } ?>
                                </ol>
                            </div>
                            <?php } ?>
                            <!-- function end -->
                            <h4>使用方法</h4>
                            <ul>
                                <li>将解压出来的dll放到kcv的Plugins目录下然后重启kcv，如果失败的话右键dll属性看看有个没有个什么什么锁定的 把那个解锁掉再重启kcv</li>
                            </ul>
                            <h4>参考项目</h4>
                            <ul>
                                <li><a href="https://github.com/Grabacr07/KanColleViewer" target="_blank">KanColleViewer</a></li>
                            </ul>
                            <h4>SVG Icons 素材</h4>
                            <ul>
                                <li><a href="http://raphaeljs.com/icons" target="_blank">http://raphaeljs.com/icons</a></li>
                                <li><a href="http://thenounproject.com/" target="_blank">http://thenounproject.com/</a></li>
                            </ul>
                            <h4>开源许可证</h4>
                            <ul>
                                <li>MIT License</li>
                            </ul>
                            <!--logs start-->
                            <h4>更新日志</h4>
                            <!--logs items-->
                            <?php foreach ($logs_list as $item) { ?>
                            <div class="log_item">
                                <div class="title">
                                    <?php echo $item->ver; ?>
                                </div>
                                <div class="info">
                                    <?php echo $item->content; ?>
                                </div>
                            </div>
                            <?php } ?>
                            <!--logs end-->
                        </div>
                    </article>
                </div>
                <footer>
                    <div class="copyright">Copyright © 2015 <a href="http://kcvp.logs.moe">KanColleViewer Plugins</a></div>
                </footer>
            </div>
        </div>
    </div>
    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
    <script src="/js/checkjq.js"></script>
    <div class="cnzz">
        <script src="http://s11.cnzz.com/stat.php?id=1254127390&web_id=1254127390" language="JavaScript"></script>
    </div>
</body>
</html>
