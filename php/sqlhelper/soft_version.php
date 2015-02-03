<?php  

	/**
	* mysql helper
	*/
	class softVersionSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `soft_version`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new softVersionModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `soft_version` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new softVersionModel($result);

			return $model;
		}
		function getItemBySoftId($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `soft_version` WHERE `soft_id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new softVersionModel($result);

			return $model;
		}
		function getNewVer($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `soft_version` WHERE `soft_id`='$id' ORDER BY `update_date` DESC LIMIT 1";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new softVersionModel($result);

			return $model;
		}
	}
?>