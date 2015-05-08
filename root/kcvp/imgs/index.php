<?php 

	include_once('../base.php');

	$key = $http->get("key");

	$allimgs = array(
		'signature' =>
			array(
				'http://ww3.sinaimg.cn/large/dabbd266jw1eqabptx9tfj20m80b7aew.jpg',//mvp1
				'http://ww4.sinaimg.cn/large/dabbd266jw1er561rt7ywj20m8091adl.jpg',//戒指
				'http://ww2.sinaimg.cn/large/dabbd266jw1er55xfmx5dj20m80dcmyu.jpg' ),//mvp2
		// 'test' =>
		// 	array(
		// 		'http://ww3.sinaimg.cn/large/cccc.jpg',
		// 		'http://zxczxc.vomc.jpg',
		// 		'http://ccasd..fasdsd.jpg' ),
		);

   	if(array_key_exists($key, $allimgs)){
   		$imgs = $allimgs[$key];
	   	$time = time();
	   	$index = $time / 60 % count($imgs);
	   	// $index = $time % count($imgs);
   		if(array_key_exists($index, $imgs)){
	   		$http->redirect($imgs[$index]);
	   	}
   	}

	die("not flie.");
?>