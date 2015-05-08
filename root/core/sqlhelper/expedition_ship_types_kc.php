<?php  

	/**
	* mysql helper
	*/
	class expeditionShipTypesKcSql
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
			$sqlstr= "SELECT `expedition_ship_type_group`.`group_Id` AS `group_Id`, `expedition_ship_type_group`.`count` AS `count`,`expedition_ship_type_group`.`ban` AS `ban` FROM `expedition_ship_type_group`,`ship_type_groups` WHERE `expedition_ship_type_group`.`group_Id` = `ship_type_groups`.`Id` AND `expedition_ship_type_group`.`expedition_Id` = '$id'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new expeditionShipTypesKcModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>