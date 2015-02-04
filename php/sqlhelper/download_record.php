<?php  

	/**
	* mysql helper
	*/
	class downloadRecordSql
	{
		public $sqlhelper;
		function __construct()
		{
			$this->sqlhelper=new mysqlHelper();
		}
		function getList(){
			$sqlstr= "SELECT * FROM `download_record`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new downloadRecordModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getItem($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `download_record` WHERE `Id`='$id'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new downloadRecordModel($result);

			return $model;
		}
		function getListByVerId($id){
            if(!is_int($id)){
            	return null;
            }
			$sqlstr= "SELECT * FROM `download_record` WHERE `ver_id`='$id'";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new downloadRecordModel($item);
				array_push($list, $model);
			}

			return $list;
		}

		function getListByVerIdAndIp($verId,$ip){
			$sqlstr= "SELECT * FROM `download_record` WHERE `ver_id`='$verId' AND `ip`='$ip'";
			$result= $this->sqlhelper->getItem($sqlstr);
			if($result==NULL){
            	return null;
            }
			$model = new downloadRecordModel($result);

			return $model;
		}
		function addItem($verId,$ip){
			$nowdate=date('Y-m-d H:i:s',time());
			$count =1;

			$sqlstr= "insert into `download_record` (`ver_id`,`ip`,`download_date`,`update_date`,`download_count`) values($verId,'$ip','$nowdate','$nowdate',$count)";
			$result= $this->sqlhelper->addItem($sqlstr);

			return $result;
		}
		function updateItem($oldData){
			$nowdate=date('Y-m-d H:i:s',time());
			$downloadcount =(int)$oldData->downloadCount+1;
			$sqlstr= "UPDATE `download_record` SET `download_count`=$downloadcount WHERE `Id`='$oldData->Id'";
			$result= $this->sqlhelper->addItem($sqlstr);

			return $result;
		}

		function addOrUpdate($verId,$ip){
			$oldData= $this->getListByVerIdAndIp($verId,$ip);
			if($oldData!=NULL){
				$this->updateItem($oldData);
            }else{
            	$this->addItem($verId,$ip);
            }
		}

		function getDownloadCount(){
			$sqlstr= "SELECT `soft`.`name`,COUNT(*) AS `count` FROM `soft`,`soft_version`,`download_record` WHERE `soft`.`Id`=`soft_version`.`soft_id` AND `download_record`.`ver_id`=`soft_version`.`Id` GROUP BY `soft_version`.`soft_id`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new downloadCountModel($item);
				array_push($list, $model);
			}

			return $list;
		}
		function getDownloadCountAll(){
			$sqlstr= "SELECT `soft_version`.`name`,COUNT(*) AS `count` FROM `soft_version`,`download_record` WHERE `download_record`.`ver_id`=`soft_version`.`Id` GROUP BY `soft_version`.`Id`";
			$result= $this->sqlhelper->getList($sqlstr);
			$list= array();
			foreach ($result as $item) {
				$model = new downloadCountModel($item);
				array_push($list, $model);
			}

			return $list;
		}
	}
?>