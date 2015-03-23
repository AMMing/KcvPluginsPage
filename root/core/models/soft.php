<?php  

	/**
	* softModel
	*/
	class softModel
	{
		public $Id=null;
		public $name=null;
		public $key=null;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->name=$row['name'];
			$this->key=$row['key'];
		}
	}
?>