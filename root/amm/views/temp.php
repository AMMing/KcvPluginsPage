<?php 

	$http = new httpHelper();
	$id =$http->get('id');

	$comics = array(
		'1' => array(
			'title' => '冰棒兔汉化】哼唧哼唧大鲸酱 2 （剧场+四格）',
			'img' => 'http://t100.qpic.cn/mblogpic/33c5eb82bd8d7adfcacc/2000.jpg',
			'des' => '忙里偷闲把第二部搬过来<br>诸位提督屯资备战之余也不要忘了压鲸哦<br>照例后面的四格仍然有@空母ヲ級 出没，不过主角依然是鲸鱼提督和呆萌的@潜水母艦小鯨 ',
			'index' => array(1,2,3,4 ),
			'kw' => '关键字,冰棒兔汉化,鲸鱼,压鲸',
		),
		'2' => array(
			'title' => 'Over QMR系列',
			'img' => 'http://t100.qpic.cn/mblogpic/22951572bc6b8dfcc062/2000',
			'des' => '本人只负责搬运整理，感谢汉化组的辛勤劳动',
			'index' => array(1,2 ),
			'kw' => 'Over QMR,岛风,北上,poi',
		)
	 );

	$comic = $comics[$id];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $comic['title']; ?></title>
    <meta name="keywords" content="<?php echo $comic['kw']; ?>" />
    <meta name="Description" content="<?php echo $comic['des']; ?>" />
<body>
 	<h2><?php echo $comic['title']; ?></h2>
 	<img src="<?php echo $comic['img']; ?>" alt="">
 	<h5><?php echo $comic['des']; ?></h5>
 	<ul>
 		<?php 
 			foreach ($comic['index'] as $key => $value) {
 				echo "<li>".$value."</li>";
 			}
 		 ?>
 	</ul>
</body>
</html>
