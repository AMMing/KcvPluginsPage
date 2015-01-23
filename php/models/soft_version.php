<?php  

	/**
	* softModel
	*/
	class softVersionModel
	{
		public $Id;
		public $softId;
		public $ver;
		public $path;
		public $updateDate;
		function __construct($row)
		{
			$this->Id=$row['Id'];
			$this->softId=$row['soft_id'];
			$this->ver=$row['ver'];
			$this->path=$row['path'];
			$this->updateDate=$row['update_date'];
		}
	}
?>