<?php

	/**
	* 
	*/
	class fileHelper
	{
		function read($path){
			$fp=fopen($path, 'r');
			$result=fread($fp, filesize($path));
			fclose($fp);

			return $result;
		}

		function save($path,$content){
			$fp=fopen($path, 'w');
			fwrite($fp, $content);
			fclose($fp);
		}
	}
?>