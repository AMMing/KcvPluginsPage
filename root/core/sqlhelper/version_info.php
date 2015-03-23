<?php  

	/**
	* mysql helper
	*/
	class versionInfoSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `version_info`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new versionInfoModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `version_info` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new versionInfoModel($result);

			return $model;
		}
		function getItemByVerId($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `version_info` WHERE `ver_id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new versionInfoModel($result);

			return $model;
		}
	}
?>