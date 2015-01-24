var jscssver=document.getElementById('hidden_jscssver').value;

function appendjs(url) {
	var script = document.createElement('script');
	script.src = url+'?ver='+jscssver;
	document.body.appendChild(script);
}

if (!window.jQuery) {
	appendjs("/js/jquery.min.js");
}

appendjs("/js/jquery.aming.slide.js");
appendjs("/js/jquery.aming.scrolltop.js");
appendjs("/js/lightbox.min.js");
appendjs("/js/index.js");



window._bd_share_config = {
	"common": {
		"bdSnsKey": {},
		"bdText": "",
		"bdMini": "2",
		"bdMiniList": false,
		"bdPic": "",
		"bdStyle": "0",
		"bdSize": "16"
		},
		"share": {}
	};

appendjs('http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5));
// with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>