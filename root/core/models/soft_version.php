<?php  

	/**
	* softVersionModel
	*/
	class softVersionModel
	{
		public $Id;
		public $softId;
		public $ver;
		public $url;
		public $updateDate;
		public $name;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->softId=(int)$row['soft_id'];
			$this->ver=$row['ver'];
			$this->url=$row['url'];
			$this->updateDate=$row['update_date'];
			$this->name=$row['name'];
		}
	}
?>