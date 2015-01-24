<?php  

	/**
	* mysql helper
	*/
	class softSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `soft`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new softModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `soft` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }

			$model = new softModel($result);

			return $model;
		}
		function getItemByKey($key){
            if($key==NULL){
            	return null;
            }
			$sqlstr= "SELECT * FROM `soft` WHERE `key`='$key'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new softModel($result);

			return $model;
		}
		function getListNotKcvp(){
			$sqlstr= "SELECT * FROM `soft`WHERE `key` <> 'kcvp'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new softModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>