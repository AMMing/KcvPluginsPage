<?php  

	/**
	* mysql helper
	*/
	class dataVersionSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `data_version`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new dataVersionModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `data_version` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new dataVersionModel($result);

			return $model;
		}
		function updateItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "UPDATE `data_version` SET `guid`=UUID() WHERE (`Id`='$id')";
			$result= $this->sqlhelper->addItem($sqlstr);

			return $result;
		}
		function updateItemVer($id,$ver){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "UPDATE `data_version` SET `version`='$ver',`guid`=UUID() WHERE (`Id`='$id')";
			$result= $this->sqlhelper->addItem($sqlstr);

			return $result;
		}
	}
?>