<?php  

	/**
	* mysql helper
	*/
	class functionsTableSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `functions_table`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new functionsTableModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getListBySoftId($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `functions_table` WHERE `soft_Id`='$id' ORDER BY `order` ASC";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new functionsTableModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>