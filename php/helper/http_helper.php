<?php

	/**
	* 
	*/
	class httpHelper
	{
		function getIP() {
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
		function views($name){
			include_once(ROOT_PATH.'/views/'.$name.'.php');
		}
	}
?>