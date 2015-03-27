<?php  

	/**
	* mysql helper
	*/
	class areaTableSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `area_table`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new areaTableModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getListByParentId($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `area_table` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new areaTableModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `area_table` WHERE `parent_id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new areaTableModel($result);

			return $model;
		}
	}
?>