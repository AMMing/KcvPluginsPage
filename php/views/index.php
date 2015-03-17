<?php 

    $pageInfoSql=new pageInfoSql();
    $logsTableSql=new logsTableSql();
    $softVersionSql=new softVersionSql();
    $softSql=new softSql();
    $functionsTableSql=new functionsTableSql();
    $html = new htmlHelper();

    $page_data=$pageInfoSql->getItem(1);
    $logs_list=$logsTableSql->getList();
    $kcvp_newver=$softVersionSql->getNewVer(1);
    $downloadurl=$html->downloadUrl('kcvp');

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $page_data->headTitle; ?></title>
    <meta name="keywords" content="<?php echo $page_data->headKeyword; ?>" />
    <meta name="Description" content="<?php echo $page_data->headDes; ?>" />
    <link rel="shortcut icon" href="/images/icon.jpg">
    <?php $html->css("/css/style.css"); ?>
    <?php $html->css("/css/lightbox.css"); ?>
    <?php $html->css("/data/style.php"); ?>
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
                <div class="head" index="1">
                    <div class="bg pic">
                        <div class="title"></div>
                    </div>
                    <div class="avatar">
                        <div class="img pic">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="bdsharebuttonbox">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
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
	                <div>
	                	<p style="color:red;">注意！！！本插件除了kcv自带的插件之外不保证跟其他第三的插件兼容，混合使用时请注意</p>
	                	<p style="color:red;">目前已知会冲突的插件有“KCV.Landscape.dll”，“KCV.ViewRangeCalc.dll”</p>
	                </div>
	                <br>
                    <!-- brief -->
                    <?php echo $page_data->brief; ?>
                    <div style="float:right;font-size: 14px;">
                    	有什么问题可以下面留言或者发送到我的邮箱：<a href="mailto:amming@outlook.com">amming@outlook.com</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content">
                    <div class="article">
                        <div>
                            <!-- content -->
                            <p>
                                <a class="img" href="/images/content/img1.png" data-lightbox="content-imgs" data-title="主要设置界面1">
                                    <img src="/images/content/img1_t.png" alt="主要设置界面1" />
                                </a>
                                <a class="img" href="/images/content/img2.png" data-lightbox="content-imgs" data-title="主要设置界面2">
                                    <img src="/images/content/img2_t.png" alt="主要设置界面2" />
                                </a>
                                <a class="img" href="/images/content/img3.png" data-lightbox="content-imgs" data-title="快捷键设置界面">
                                    <img src="/images/content/img3_t.png" alt="快捷键设置界面" />
                                </a>
                                <a class="img" href="/images/content/img4.png" data-lightbox="content-imgs" data-title="肝船用的迷你窗口">
                                    <img src="/images/content/img4_t.png" alt="肝船用的迷你窗口" />
                                </a>
                                <a class="img" href="/images/content/img5.png" data-lightbox="content-imgs" data-title="托盘右键菜单">
                                    <img src="/images/content/img5_t.png" alt="托盘右键菜单" />
                                </a>
                                <a class="img" href="/images/content/img6.png" data-lightbox="content-imgs" data-title="大破警告">
                                    <img src="/images/content/img6_t.png" alt="大破警告" />
                                </a>
                                <a class="img" href="/images/content/img7.png" data-lightbox="content-imgs" data-title="大破警告设置界面">
                                    <img src="/images/content/img7_t.png" alt="大破警告设置界面" />
                                </a>
                            </p>
                            <p>
                                <strong>下载地址</strong>
                                <a href="<?php echo $downloadurl; ?>"><?php echo $kcvp_newver->name; ?></a>
                                <span class="ver_date">[<?php echo $kcvp_newver->updateDate; ?>]</span>
                            </p>
                            <p>
                                <strong>项目源码</strong>
                                <a href="https://github.com/AMMing/KcvPlugins" target="_blank">https://github.com/AMMing/KcvPlugins</a>
                            </p>

                            <div class="mleft30">
                                <p>KanColleViewer 在3.0版本之后增加了插件功能，可以通过添加插件完善kcv的功能。</p>
                                <p>本插件在只kcv3.4下测试，其他旧版本理论上可以，(๑•́ ₃ •̀๑) 不过没有测试，使用时最好是用最新的kcv。</p>
                            </div>
                            <!-- function start -->
                            <h4>主要功能</h4>
                            <?php
                                $soft_list=$softSql->getListNotKcvp();

                                foreach ($soft_list as $soft_item) {
                                    $soft_newver=$softVersionSql->getNewVer($soft_item->Id);
                                    $downloadurl=$html->downloadUrl($soft_item->key);
                                    $func_list=$functionsTableSql->getListBySoftId($soft_item->Id);
                            ?>
                            <div>
                                <ul>
                                    <li>
                                        <?php echo $soft_item->name; ?>
                                        (<a href="<?php echo $downloadurl; ?>">单独下载</a>)
                                        <span class="ver_date">[<?php echo $soft_newver->updateDate; ?>]</span>
                                    </li>
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
                            <h4>注意事项</h4>
                            <ul>
                                <li>“AMing.Plugins.Core.dll”为核心组件不可删除</li>
                                <li>本插件除了kcv自带的插件之外不保证跟其他第三的插件兼容，混合使用时请注意</li>
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
                    </div>
                    <div class="msgboard">
                        <?php $html->views('msgboard'); ?>
                    </div>
                </div>
                <div class="footer">
                    <div class="copyright">Copyright © 2015 <a href="http://kcvp.logs.moe">KanColleViewer Plugins</a></div>
                </div>
            </div>
        </div>
        <div class="hide_imgs">
            <div class="hide_img_1"></div>
            <div class="hide_img_2"></div>
            <div class="hide_img_3"></div>
            <div class="hide_img_4"></div>
            <div class="hide_img_5"></div>
            <div class="hide_img_6"></div>
        </div>
    </div>
    <input type="hidden" id="hidden_jscssver" value="<?php echo JsCssVer; ?>">
    <?php $html->js("http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"); ?>
    <?php $html->js("/js/checkjq.js"); ?>
    <div class="cnzz">
        <?php $html->js("http://s11.cnzz.com/stat.php?id=1254127390&web_id=1254127390"); ?>
    </div>
</body>
</html>
