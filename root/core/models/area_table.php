<?php  

	/**
	* areaTableModel
	*/
	class areaTableModel
	{
		public $Id;

		public $Name;

		public $ParentId;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Name=$row['name'];
			$this->ParentId=(int)$row['parent_id'];
		}
	}
?>