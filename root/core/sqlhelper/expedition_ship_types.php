<?php  

	/**
	* mysql helper
	*/
	class expeditionShipTypesSql
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
			$sqlstr= "SELECT `ship_types`.`Id` AS `Id`, `ship_types`.`name` AS `name`,`ship_types`.`short_name` AS `short_name`,`ship_types`.`abbreviation` AS `abbreviation`,`expedition_ship_types`.`count` AS `count`,`expedition_ship_types`.`conditions` AS `conditions`,`expedition_ship_types`.`ban` AS `ban` FROM `expedition_ship_types`,`ship_types` WHERE `expedition_ship_types`.`shiptypes_Id` = `ship_types`.`Id` AND `expedition_ship_types`.`expedition_Id` = '$id'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new expeditionShipSimpleModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>