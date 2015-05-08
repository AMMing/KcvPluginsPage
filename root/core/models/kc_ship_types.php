<?php  

	/**
	* kcShipTypesModel
	*/
	class kcShipTypesModel
	{
		public $Id;
		//名称
		public $Name;
		//
		public $SortNumber;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Name=$row['name'];
			$this->SortNumber=(int)$row['sort_number'];
		}
	}
?>