<?php

	/**
	* 
	*/
	class httpHelper
	{
		
		function getIP() {
			if (getenv('HTTP_CLIENT_IP')) {
				$ip = getenv('HTTP_CLIENT_IP');
			}
			elseif (getenv('HTTP_X_FORWARDED_FOR')) {
				$ip = getenv('HTTP_X_FORWARDED_FOR');
			}
			elseif (getenv('HTTP_X_FORWARDED')) {
				$ip = getenv('HTTP_X_FORWARDED');
			}
			elseif (getenv('HTTP_FORWARDED_FOR')) {
				$ip = getenv('HTTP_FORWARDED_FOR');

			}
			elseif (getenv('HTTP_FORWARDED')) {
				$ip = getenv('HTTP_FORWARDED');
			}
			else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}
		function getIP2() {
			$ip =$_SERVER["REMOTE_ADDR"];

			return $ip;
		}


		function redirect($url){
			header('Location: '.$url);
			exit;
		}
		
		function isPost(){
			return $_SERVER['REQUEST_METHOD']=='POST';
		}

		function json($data){
			$json = json_encode($data);
			header('Content-type: text/json; charset=UTF-8');
			echo $json;
			exit;
		}
		function get($key){
			return $_GET[$key];
		}

		function post($key){
			return $_POST[$key];
		}

		function postd($key,$default){
			$val =$this->post($key);
			if($val==NULL||$val==""){
				return $default;
			}
			return $val;
		}
	}
?>