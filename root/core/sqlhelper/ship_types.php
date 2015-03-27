<?php  

	/**
	* mysql helper
	*/
	class shipTypesSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `ship_types`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new shipTypesModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `ship_types` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new shipTypesModel($result);

			return $model;
		}
	}
?>