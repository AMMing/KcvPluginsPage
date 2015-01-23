<?php  

	/**
	* softModel
	*/
	class downloadRecordModel
	{
		public $Id;
		public $verId;
		public $ip;
		public $downloadDate;
		public $updateDate;
		public $downloadCount;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->verId=(int)$row['ver_id'];
			$this->ip=$row['ip'];
			$this->downloadDate=$row['download_date'];
			$this->updateDate=$row['update_date'];
			$this->downloadCount=(int)$row['download_count'];
		}
	}
?>