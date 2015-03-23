<?php 

	include_once('../base.php');

	$headSliderSql=new headSliderSql();
	$result=$headSliderSql->getList();
	
	$css='';
	foreach ($result as $item) {
		$left=($item->avatarLeft+5) * -1;
		$css.='.hide_img_'.$item->Id.',.content_frame > .head[index="'.$item->Id.'"] .pic{background-image: url('.$item->img.')}';
		$css.='.content_frame > .head[index="'.$item->Id.'"] .avatar .img{background-position-x: '.$left.'px}';
	}
	header('Content-type: text/css; charset=UTF-8');
	echo $css;
?>


