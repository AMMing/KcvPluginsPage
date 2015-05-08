<?php  

	/**
	* mysql helper
	*/
	class groupShipTypesTableSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT `kc_ship_types`.`Id` AS `Id`, `kc_ship_types`.`name` AS `name`,`kc_ship_types`.`sort_number` AS `sort_number` FROM `ship_type_group_table`,`kc_ship_types` WHERE `ship_type_group_table`.`kc_ship_type_Id` = `kc_ship_types`.`Id` AND `ship_type_group_table`.`group_Id` = '$id'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new kcShipTypesModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>