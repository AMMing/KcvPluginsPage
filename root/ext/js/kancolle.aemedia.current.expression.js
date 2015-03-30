var KancolleCurrentExpression = function() {
    var obj = this;
    var $ = jQuery;

    obj.createBtn = function() {
        var a = $('<a id="e_current_sml" title="添加自定义表情" href="javascript:;" initialized="true">自定义表情</a>');
        a.css({
            backgroundPosition: '-3px -80px'
        });

        return a;
    };

    obj.init = function() {
        $('#e_sml').after(obj.createBtn());
    };

};

var kancolleCurrentExpression = new KancolleCurrentExpression();
kancolleCurrentExpression.init();


//insertSmiley(86)
//insertText('<img src="http://kan.aemedia.org/uc_server/avatar.php?uid=26212&size=middle" border="0"  alt="" />', false);