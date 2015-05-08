var Kcvp = function() {};
Kcvp.prototype.HeaderSilder = {
    imgdata: [],
    imgcount: 0,
    imglist:[],
    //jquery object
    $head_bg_img: null,
    $head_title: null,
    $avatar: null,
    $avatar_title: null,
    $avatar_img: null,
    Init: function() {
        this.$head_bg_img = $(".content_frame > .head .pic");
        this.$head_title = $(".content_frame > .head .bg .title");
        this.$avatar = $(".content_frame > .head .avatar");
        this.$avatar_title = $(".content_frame > .head .avatar .img .title");
        this.$avatar_img = $(".content_frame > .head .avatar .img");

        this.LoadImage();
        this.AutoChangeImage();
    },
    GetImage:function(index,url){
        var result;
        $.each(this.imglist,function(){
            if(this.index==index){
                result=this.img;
            }
        });
        if(!result){
            result = new Image();
            result.src=url;
            var obj = {
                index:index,
                img:result
            };
            this.imglist.push(obj);
        }

        return result;
    },
    ChangeImage_Start: function() {
        var data =this.imgdata[this.imgcount];

        var temp_this = this;
        this.$head_bg_img.animate({
            opacity: 0
        }, 400, function() {
            temp_this.ChangeImage_Head_End(data);
        });

        this.$avatar.animate({
            left: data[1]
        }, 800);
        this.$head_title.animate({
            left: data[2]
        }, 800);
    },
    ChangeImage_Head_End: function(data) {
        var img_left = (data[1] + 5) * -1;

        this.$head_bg_img.css("background-image", "url(" + data[0] + ")");
        this.$avatar_img.css({
            "background-position-x": img_left + "px"
        }, 800);
        this.$head_bg_img.animate({
            opacity: 1
        }, 400);

        this.$head_title.css("color", data[3]);
        this.$avatar_title.css("color", data[3]);
        this.$head_title.html(data[4]);
        this.$avatar_title.html(data[5]);
    },
    AutoChangeImage: function() {
        this.imgcount++;
        if (this.imgcount >= 6) {
            this.imgcount = 0;
        }
        this.ChangeImage_Start();

        var temp_this = this;
        setTimeout(AutoChangeImage, 4000);
    },
    LoadImage: function() {
        for (var i = 0; i < 6; i++) {
            this.GetImage(i,this.imgdata[this.imgcount][0]);
        }
    }

};

function AutoChangeImage(){
    kcvp.HeaderSilder.AutoChangeImage();
}


var kcvp = new Kcvp();
$(document).ready(function() {
    var $win = $(window);
    var $nav_bg = $(".main_nav .bg");
    var $nav_menu = $(".main_nav .menu");
    $(window).resize(function() {
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
            "/images/3.png"
        ],
        column_count: 40,
        rom_count: 1,
        change_time: 5400
    });

    $nav_bg.css("opacity", "0.6");
    $(window).trigger("resize");

    kcvp.HeaderSilder.imgdata = [
        ["images/head/19990148.jpg", 140, 350, "#5EBFFF", "初めて恋をした記憶", "神のみぞ知るセカイ"],
        ["images/head/17605036.jpg", 450, 10, "#FFDDBE", "ゆめのかたち", "初音ミク"],
        ["images/head/31035932.jpg", 220, 430, "#3BC7FD", "私の大家族 (Inst)", "鳥の詩"],
        ["images/head/23350043.jpg", 110, 320, "#0066D5", "一番の宝物(Mix)", "Heavenly Beats"],
        ["images/head/234234.jpg", 480, 10, "#51B2FF", "氷花妖精伝", "遙～HARUKA"],
        ["images/head/7897897.jpg", 220, 430, "#0c9eff", "kagonotori", "SOUNDOT"]
    ];
    kcvp.HeaderSilder.imgcount = 5;
    kcvp.HeaderSilder.Init();
});

$(document).ready(function() {
    $("#scroll_to_top").hide();
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1000) {
                $('#scroll_to_top').fadeIn();
            } else {
                $('#scroll_to_top').fadeOut();
            }
        });
        $('a#scroll_to_top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});