<?php  

	/**
	* functionsTableModel
	*/
	class functionsTableModel
	{
		public $Id;
		public $softId;
		public $content;
		public $order;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->softId=(int)$row['soft_Id'];
			$this->content=$row['content'];
			$this->order=(int)$row['order'];
		}
	}
?>