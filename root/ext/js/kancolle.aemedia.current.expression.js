var KancolleCurrentExpression = function() {
    var obj = this;
    var $ = jQuery;
    obj.$imgdiv = null;
    obj.imglist = [
        'http://ww4.sinaimg.cn/large/005X3pWTjw1ep9sstew0ej301f01k742.jpg',
        'http://ww2.sinaimg.cn/large/005X3q9sjw1ep9vpewuhfj302j036glg.jpg',
        'http://ww1.sinaimg.cn/large/005X4kHAjw1ep9sp2x7lvj304b04g3yi.jpg',
        'http://ww2.sinaimg.cn/large/dabbd266jw1eqdixk5nqsj201c01c3yi.jpg',
        'http://ww1.sinaimg.cn/large/dabbd266jw1eqo1cciyt7j20b40awjrr.jpg'
    ];

    obj.createBtn = function() {
        var a = $('<a id="e_current_sml" title="自定义表情" href="javascript:;" initialized="true">自定义表情</a>');
        a.css({
            backgroundPosition: '-3px -80px'
        });

        return a;
    };
    obj.createImageList = function() {
        var div = $('<div></div>');
        div.addClass('current_imgs_div');
        var close = $('<div></div>');
        close.addClass('close');
        div.append(close);
        var ul = $('<ul></ul>');
        div.append(ul);

        $.each(obj.imglist, function(index, val) {
            var item = obj.createItem(val);
            ul.append(item);
        });

        return div;
    };
    obj.createItem = function(url) {
        var li = $('<li></li>');
        var img = new Image();
        img.src = url;
        li.append(img);

        return li;
    };
    obj.bindEventByButton = function($obj) {
        $obj.bind('click', function() {
            if (obj.$imgdiv.css('display') == 'none') {
                var p = $(this).offset();
                obj.showDiv(p);
            } else {
                obj.hideDiv();
            }
        });
    };

    obj.hasEdit = function() {
        var $edit = $('#e_body');

        return $edit.length > 0;
    };

    obj.setCss = function(div) {
        div.css({
            width: '530px',
            height: '300px',
            border: '1px solid #ccc',
            position: 'absolute',
            background: '#eee',
            display: 'none',
            top: '0',
            left: '0'
        });
        div.find('ul').css({
            width: '520px',
            height: '270px',
            margin: '25px 5px 5px 5px',
            overflow: 'scroll',
            padding: '0'
        });
        div.find('li').css({
            listStyle: 'none',
            float: 'left',
            width: '50px',
            height: '50px',
            margin: '5px',
            border: '1px solid #ccc',
            textAlign: 'center',
            cursor: 'pointer',
            background: '#fff'
        });
        div.find('li img').css({
            height: '50px'
        });
        div.find('.close').css({
            width: '20px',
            height: '20px',
            position: 'absolute',
            background: '#FF0',
            top: '4px',
            right: '5px',
            cursor: 'pointer',
            background: 'url(http://kancolle.aemedia.org/./template/999test_cn_img/dz_model_15020401/common/cls.gif) no-repeat 0 0'
        });
    };
    obj.bindEventByImagelist = function(div) {
        div.find('li').bind('click', function() {
            var url = $(this).find('img').attr('src');
            if (!!url) {
                insertText('<img src="' + url + '" border="0"  alt="" />', false);
                obj.hideDiv();
            }
        });
        div.find('.close').bind('click', function() {
            obj.hideDiv();
        });
    };
    obj.showDiv = function(p) {
        obj.$imgdiv.css({
            top: p.top + 50,
            left: p.left - 100
        });
        obj.$imgdiv.show();
    };
    obj.hideDiv = function() {
        obj.$imgdiv.hide();
    };
    obj.appendToBody = function() {
        if ($('.current_imgs_div').length > 0) return;

        $('body').append(obj.$imgdiv);
    };

    obj.init = function() {
        if (!obj.hasEdit()) return;

        var btn = obj.createBtn();
        $('#e_body #e_sml').after(btn);
        obj.bindEventByButton(btn);

        var imgdiv = obj.createImageList();
        obj.setCss(imgdiv);
        obj.bindEventByImagelist(imgdiv);

        obj.$imgdiv = imgdiv;
        obj.appendToBody();
    };

};

var kancolleCurrentExpression = new KancolleCurrentExpression();
kancolleCurrentExpression.init();