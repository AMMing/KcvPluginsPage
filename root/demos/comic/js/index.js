var Slider = function() {
	var obj = this;
	obj.init = function() {
		console.log(window.jQuery);
	};
};

var slider = null;
Tools.appendJs('http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js', function() {
	slider = new Slider();
	slider.init();
});


