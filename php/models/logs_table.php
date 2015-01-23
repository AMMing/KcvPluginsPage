<?php  

	/**
	* softModel
	*/
	class logsTableModel
	{
		public $Id;
		public $softId;
		public $content;
		public $ver;
		public $url;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->softId=(int)$row['soft_Id'];
			$this->content=$row['content'];
			$this->ver=$row['ver'];
			$this->url=$row['url'];
		}
	}
?>