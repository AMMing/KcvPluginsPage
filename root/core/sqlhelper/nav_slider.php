<?php  

	/**
	* mysql helper
	*/
	class navSliderSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `nav_slider` ORDER BY `order` ASC";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new navSliderModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `nav_slider` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			$model = new navSliderModel($result);

			return $model;
		}
	}
?>