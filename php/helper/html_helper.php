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
	}
?>