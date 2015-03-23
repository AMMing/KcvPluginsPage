/**
* @author A;Ming
* @email y2443@163.com
* @site wwww.y2443.com,logs.moe
* @date 2015-01-23
*/
var Kcvp = function() {};
//head
Kcvp.prototype.Head = function() {
    var obj = new Object();

    obj.count = 0;
    obj.list = null;
    obj.changetime = 4000;
    obj.index = 0;

    obj.$head_bg_img = null;
    obj.$head_title = null;
    obj.$avatar = null;
    obj.$avatar_title = null;
    obj.$avatar_img = null;

    obj.Init = function() {
        obj.$head_bg_img = $(".content_frame > .head .pic");
        obj.$head_title = $(".content_frame > .head .bg .title");
        obj.$avatar = $(".content_frame > .head .avatar");
        obj.$avatar_title = $(".content_frame > .head .avatar .img .title");
        obj.$avatar_img = $(".content_frame > .head .avatar .img");

        obj.GetList();
    };
    obj.GetList = function() {
        $.ajax({
            url: '/data/headlist.php',
            type: 'GET',
            dataType: 'json'
        }).done(function(data) {
            if (data) {
                obj.list = data;
                obj.count = data.length;
            }
        }).always(function() {
            if (obj.list) {
                obj.Auto();
            }
        });

    };
    obj.Auto = function() {
        obj.index++;
        if (obj.index >= obj.count) {
            obj.index = 0;
        }
        obj.ChangeHeadImage();

        setTimeout(obj.Auto, obj.changetime);
    };
    obj.GetItem = function(index) {
        return obj.list[index];
    };
    obj.ChangeHeadImage = function() {
        var data = obj.GetItem(obj.index);
        var img_left = (data.avatarLeft+14) * -1;

        obj.$head_bg_img.animate({
            opacity: 0
        }, 400, function() {
            obj.$head_bg_img.css("background-image", "url(" + data.img + ")");
            obj.$avatar_img.css({
                "background-position-x": img_left + "px"
            }, 800);
            obj.$head_bg_img.animate({
                opacity: 1
            }, 400);

            obj.$head_title.css("color", data.color);
            obj.$avatar_title.css("color", data.color);
            obj.$head_title.html(data.title);
            obj.$avatar_title.html(data.des);
        });

        obj.$avatar.animate({
            left: data.avatarLeft
        }, 800);
        obj.$head_title.animate({
            left: data.titleLeft
        }, 800);
    };

    return obj;
}();
// nav
Kcvp.prototype.Nav = function() {
    var obj = new Object();

    obj.list = null;
    obj.changetime = 5400;

    obj.$win = null;
    obj.$main_nav = null;
    obj.$nav_bg = null;
    obj.$nav_menu = null;

    obj.Init = function() {
        obj.$win = $(window);
        obj.$main_nav = $(".main_nav");
        obj.$nav_bg = $(".main_nav .bg");
        obj.$nav_menu = $(".main_nav .menu");

        obj.GetList();
        obj.BindEvent();
        obj.ResizeNav();
    };
    obj.GetList = function() {
        $.ajax({
            url: '/data/navlist.php',
            type: 'GET',
            dataType: 'json'
        }).done(function(data) {
            if (data) {
                obj.list = [];
                $.each(data, function(index, val) {
                    obj.list.push(val.img);
                });
            }
        }).always(function() {
            if (obj.list) {
                obj.Start();
            }
        });

    };
    obj.ResizeNav = function() {
        var left_nav_bg = (obj.$win.width() - obj.$nav_bg.width()) / 2;
        var left_nav_menu = (obj.$win.width() - obj.$nav_menu.width()) / 2;

        left_nav_menu = left_nav_menu < 0 ? 0 : left_nav_menu;

        obj.$nav_bg.css("margin-left", left_nav_bg + "px");
        obj.$nav_menu.css("left", left_nav_menu + "px");
    };
    obj.BindEvent = function() {
        obj.$win.bind('resize', obj.ResizeNav);
    };
    obj.Start = function() {
        obj.$nav_bg.css("opacity", "0.6");
        obj.$main_nav.show();

        obj.$nav_bg.amingslide({
            imglist: obj.list,
            column_count: 60,
            rom_count: 1,
            change_time: obj.changetime
        });
    };

    return obj;
}();

// init
Kcvp.prototype.Init = function() {
    this.Head.Init();
    this.Nav.Init();
}



var kcvp = new Kcvp();
$(document).ready(function() {
    kcvp.Init();

    $(window).aming_scrolltop({
        imgurl: '/images/totop.png',
        showopacity: 1,
        mainwidth: 1050
    });

    $('.aming_to_top').css('-webkit-border-radius', '25px');
});