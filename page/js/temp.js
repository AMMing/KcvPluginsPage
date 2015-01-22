var headimgdata = [
    ["/images/head/19990148.jpg", 140, 350, "#5EBFFF", "初めて恋をした記憶", "神のみぞ知るセカイ"],
    ["/images/head/17605036.jpg", 450, 10, "#FFDDBE", "ゆめのかたち", "初音ミク"],
    ["/images/head/31035932.jpg", 220, 430, "#3BC7FD", "私の大家族 (Inst)", "鳥の詩"],
    ["/images/head/23350043.jpg", 110, 320, "#0066D5", "一番の宝物(Mix)", "Heavenly Beats"],
    ["/images/head/234234.jpg", 480, 10, "#51B2FF", "氷花妖精伝", "遙～HARUKA"],
    ["/images/head/7897897.jpg", 220, 430, "#0c9eff", "kagonotori", "SOUNDOT"]
];
var head_img_index = 0;
function ChangeHeadImage(data) {
    var $head_bg_img = $(".content_frame > .head .pic");
    var $head_title = $(".content_frame > .head .bg .title");
    var $avatar = $(".content_frame > .head .avatar");
    var $avatar_title = $(".content_frame > .head .avatar .img .title");
    var $avatar_img = $(".content_frame > .head .avatar .img");

    var img_left = (data[1] + 5) * -1;

    $head_bg_img.animate({ opacity: 0 }, 400, function () {
        $head_bg_img.css("background-image", "url(" + data[0] + ")");
        $avatar_img.css({ "background-position-x": img_left + "px" }, 800);
        $head_bg_img.animate({ opacity: 1 }, 400);

        $head_title.css("color", data[3]);
        $avatar_title.css("color", data[3]);
        $head_title.html(data[4]);
        $avatar_title.html(data[5]);
    });

    $avatar.animate({ left: data[1] }, 800);
    $head_title.animate({ left: data[2] }, 800);
}
function AutoChangeImage() {
    head_img_index++;
    if (head_img_index >= 6) {
        head_img_index = 0;
    }
    ChangeHeadImage(headimgdata[head_img_index]);

    setTimeout(AutoChangeImage, 4000);
}

function LoadImage() {
    for (var i = 0; i < 6; i++) {
        var img = new Image();
        img.src = headimgdata[head_img_index][0];
    }
}

$(document).ready(function () {
    var $win = $(window);
    var $nav_bg = $(".main_nav .bg");
    var $nav_menu = $(".main_nav .menu");
    $(window).resize(function () {
        var left_nav_bg = ($win.width() - $nav_bg.width()) / 2;
        var left_nav_menu = ($win.width() - $nav_menu.width()) / 2;

        left_nav_menu = left_nav_menu < 0 ? 0 : left_nav_menu;

        $nav_bg.css("margin-left", left_nav_bg + "px");
        $nav_menu.css("left", left_nav_menu + "px");
    });
    $nav_bg.amingslide({
        imglist: [
            "/images/1.png",
            "/images/2.png",
            "/images/3.png"],
        column_count: 40,
        rom_count: 1,
        change_time: 5400
    });

    $nav_bg.css("opacity", "0.6");
    $(window).trigger("resize");

    head_img_index = 5;
    AutoChangeImage();
});

$(document).ready(function () {
    $("#scroll_to_top").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1000) {
                $('#scroll_to_top').fadeIn();
            } else {
                $('#scroll_to_top').fadeOut();
            }
        });
        $('a#scroll_to_top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});