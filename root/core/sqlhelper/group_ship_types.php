<?php  

	/**
	* mysql helper
	*/
	class groupShipTypesSql
	{
		public $sqlhelper;
		public $groupShipTypesTableSql;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
			$this->groupShipTypesTableSql=new groupShipTypesTableSql();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `ship_type_groups`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new groupShipTypesModel($item);
				$model->setShipTypes($this->groupShipTypesTableSql->getList($model->Id));

				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `ship_type_groups` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new groupShipTypesModel($result);

			return $model;
		}
	}
?>