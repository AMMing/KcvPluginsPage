var KancolleList = function() {
    var obj = this;
    obj.getItemInfo = function(val) {
        var item = jQuery(val);
        var comment = item.find('.t9_01').text().replace('<i></i>', '');
        var view = item.find('.t9_02').text().replace('<i></i>', '');
        var title = item.find('.s.xst');
        var title_text = item.find('.s.xst').text();
        var link = title.attr('href');
        var date = item.find('td.by em a').text();
        var landlord = item.find('td.by cite:first');
        var latestreply = item.find('td.by cite:last');
        var landlord_id = obj.getLandlordId(landlord);
        var landlord_name = landlord.find('a').text();
        var title_obj = title.parent();
        var des = title_obj.find('>div:last').clone();
        var title_obj = obj.setTitleObject(title.parent());

        return {
            comment: comment,
            view: view,
            title_text: title_text,
            link: link,
            date: date,
            landlord_id: landlord_id,
            landlord_name: landlord_name,
            title_obj: title_obj,
            des: des
        };
    };
    obj.setTitleObject = function($obj) {
        $obj.find('>div:last').remove();
        $obj.find('.t9_01').parent().remove();

        return $obj;
    };
    obj.getLandlordId = function(item) {
        var link = item.find('a').attr('href');
        var index = link.indexOf('space-uid-');
        var endindex = link.indexOf('.html');
        var id = link.substring('space-uid-'.length, endindex - index);

        return id;
    };
    obj.getUserIcon = function(id) {
        // return 'http://kan.aemedia.org/uc_server/avatar.php?uid=' + id + '&size=small';
        // return 'http://kan.aemedia.org/uc_server/avatar.php?uid=' + id + '&size=middle';
        return 'http://kan.aemedia.org/uc_server/avatar.php?uid=' + id + '&size=big';
    };
    obj.getList = function() {
        var info_list = new Array();
        var list = jQuery('#threadlisttableid >tbody');
        jQuery.each(list, function(index, val) {
            var info = obj.getItemInfo(val);
            info_list.push(info);
        });

        return info_list;
    };

    obj.getNewList = function(infoList) {
        var ul = jQuery('<ul></ul>');
        jQuery.each(infoList, function(index, val) {
            var newItem = obj.createNewItem(val);
            ul.append(newItem);
        });
        ul.addClass('newlist');

        return ul;
    };
    obj.createNewItem = function(info) {
        var li = jQuery('<li></li>');
        var a = jQuery('<a></a>');
        li.append(a);

        a.attr('href', info.link);
        a.attr('target', '_blank');
        a.append(obj.createIcon(info));
        a.append(obj.createLandlord(info));
        a.append(obj.createComment(info));
        a.append(obj.createView(info));
        a.append(obj.createDate(info));
        a.append(obj.createTitle(info));
        a.append(obj.createDes(info));

        return li;
    };
    obj.createIcon = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('icon');
        var img = new Image();
        div.append(img);
        img.src = obj.getUserIcon(info.landlord_id);

        return div;
    };
    obj.createLandlord = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('landlord');
        div.html(info.landlord_name);

        return div;
    };
    obj.createComment = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('comment');
        var h3 = jQuery('<h3></h3>');
        var h4 = jQuery('<h4></h4>');
        div.append(h3);
        div.append(h4);
        h3.html('回复:');
        h4.html(info.comment);

        return div;
    };
    obj.createView = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('view');
        var h3 = jQuery('<h3></h3>');
        var h4 = jQuery('<h4></h4>');
        div.append(h3);
        div.append(h4);
        h3.html('查看:');
        h4.html(info.view);

        return div;
    };
    obj.createDate = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('date');
        div.html(info.date);

        return div;
    };
    obj.createTitle = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('title');
        div.html(info.title_obj.html());

        return div;
    };
    obj.createDes = function(info) {
        var div = jQuery('<div></div>');
        div.addClass('des');
        div.html(info.des.html());
        obj.setDesImages(div);

        return div;
    };
    obj.setDesImages = function(des) {
        var imgs = des.find('img');
        jQuery.each(imgs, function(index, val) {
            jQuery(val).parent('a').addClass('img_parent');
        });
    };

    obj.setCss = function(ul) {
        ul.css({});
        ul.find('li *').css({
            fontFamily: 'Lato, Microsoft YaHei, sans - serif'
        });
        ul.find('li').css({
            listStyle: 'none',
            height: '110px',
            padding: '10px',
            borderBottom: '1px dashed #ccc',
            paddingBottom: '10px'
        });
        ul.find('li > a').css({
            position: 'relative',
            textDecoration: 'none'
        });
        ul.find('li > a > div').css({
            position: 'absolute'
        });
        ul.find('li .icon img').css({
            width: '100px',
            height: '100px',
            borderRadius: '50px',
            border: '4px solid #808080',
            opacity: '0.5'
        });
        ul.find('li .landlord, li .comment, li .view, li .date').css({
            textAlign: 'center',
            textShadow: '#fff 1px 0 0, #fff 0 1px 0, #fff -1px 0 0, #fff 0 -1px 0',
            fontSize: '14px',
            fontWeight: 'bold'
        });
        ul.find('li .comment h3, li .view h3').css({
            fontSize: '12px',
            float: 'left'
        });
        ul.find('li .comment h4, li .view h4').css({
            fontSize: '12px',
            float: 'left',
            marginLeft: '5px'
        });
        ul.find('li .landlord ').css({
            width: '100px',
            top: '90px',
            color: '#F90',
            overflow: 'hidden',
            textOverflow: 'ellipsis',
            whiteSpace: 'nowrap'
        });
        ul.find('li .comment').css({
            fontSize: '16px',
            width: '100px',
            top: '10px',
            left: '20px',
            textAlign: 'left',
            color: '#007CD5'
        });
        ul.find('li .view').css({
            fontSize: '16px',
            width: '100px',
            top: '30px',
            left: '8px',
            textAlign: 'left',
            color: '#007CD5'
        });
        ul.find('li .date').css({
            width: '100px',
            top: '65px',
            lineHeight: '14px',
            color: '#666'
        });
        ul.find('li .title').css({
            fontSize: '16px',
            width: '800px',
            top: '-5px',
            left: '110px',
            paddingLeft: '0'
        });
        ul.find('li .des').css({
            fontSize: '14px',
            width: '800px',
            top: '25px',
            left: '120px',
            color: '#666'
        });
        ul.find('li .des .img_parent').css({
            maxWidth: '60px',
            maxHeight: '60px',
            overflow: 'hidden',
            display: 'block',
            float: 'left',
            marginRight: '10px'
        });
        ul.find('li .des .img_parent img').css({
            height: '60px'
        });
    };


    obj.init = function() {
        var infolist = obj.getList();
        var list = jQuery('#threadlisttableid');
        list.hide();

        var newlistobj = obj.getNewList(infolist);
        obj.setCss(newlistobj);
        list.after(newlistobj);
        jQuery('# threadlist.bm_c').css({
            padding: '0'
        });
        jQuery('#autopbn').hide();

    };

};

var kancolleList = new KancolleList();


jQuery(function() {
    kancolleList.init();
    /*判断是否有横幅改变分区icon的样式*/
    if (jQuery('#ct>img').length == 0) {
        var $div = jQuery('#ct .t9_cle:first+div[class^="t9_"]');
        if ($div.length > 0) {
            $div.find('div').css({
                top: 5,
                left: 10
            });
            $div.find('img').css({
                width: 115,
                height: 115
            });
        }
        jQuery('.bm.bml.pbn>div:first').css('padding-left', '140px');
    }

    /*替换顶部导航栏的消息地址为帖子消息*/
    jQuery('.t9_02 a').attr('href', 'http://kancolle.aemedia.org/home.php?mod=space&do=notice&view=mypost');
    jQuery('#t9_forumlist_btn').attr('href', '/');


    /*移除水b排行榜和最新会员榜的posts和date*/
    var $emlist = jQuery('#portal_block_38_content em,#portal_block_37_content em');
    jQuery.each($emlist, function() {
        var $this = jQuery(this);
        var html = $this.html();
        html = html.replace('date:', '');
        html = html.replace('posts:', '');
        $this.html(html);
    });
    /*停止顶部文章列表自动跳转tab*/
    clearTimeout(tabTimer);



    /* 设置导航栏 */
    var $navs = jQuery('.t9_n.wp ul');
    var $menu = jQuery('#toptb .t9_03').parent();
    $navs.find('li:first').remove();
    var $lis = $navs.find('li').clone();

    $lis.css({
        'overflow': 'hidden'
    });
    $lis.find('img').css({
        'display': 'block',
        'margin': '8px 0 0 6px',
        'width': '34px',
        'height': '34px',
        'borderRadius': '3px'
    });
    $lis.find('a').css({
        'fontSize: 0;': '0'
    });
    var t9_01 = $menu.find('.t9_01');
    t9_01.before($lis);
    jQuery('#scbar').hide();

    jQuery('.t9_forumlist_btn').unbind('click');
});