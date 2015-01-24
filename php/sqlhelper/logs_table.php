<?php  

	/**
	* mysql helper
	*/
	class logsTableSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `logs_table` ORDER BY `order` DESC";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new logsTableModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>