<?php

	/**
	* 
	*/
	class htmlHelper
	{
		function css($url){
			echo '<link href="'.$url.'?ver='.JsCssVer.'" rel="stylesheet" />';
		}

		function js($url){
			echo '<script src="'.$url.'?ver='.JsCssVer.'"></script>';
		}
		function downloadUrl($key){
			return '/'.$key.'.zip';
		}
		function views($name){
			include_once(ROOT_PATH.'/views/'.$name.'.php');
		}
	}
?>