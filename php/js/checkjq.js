function appendjs(url) {
	var script = document.createElement('script');
	script.src = url;
	document.body.appendChild(script);
}

if (!window.jQuery) {
	appendjs("/js/jquery.min.js");
}

appendjs("/js/jquery.aming.slide.js");
appendjs("/js/jquery.aming.scrolltop.js");
appendjs("/js/index.js");