<?php  

	/**
	* mysql helper
	*/
	class expeditionInfoSql
	{
		public $sqlhelper;
		public $expeditionShipTypesSqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
			$this->expeditionShipTypesSqlhelper=new expeditionShipTypesSql();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `expedition_info` WHERE `enable`=1";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new expeditionInfoModel($item);
				$model->ShipTypes=$this->expeditionShipTypesSqlhelper->getList($model->Id);

				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `expedition_info` WHERE `Id`='$id' AND `enable`=1";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new expeditionInfoModel($result);

			return $model;
		}
	}
?>