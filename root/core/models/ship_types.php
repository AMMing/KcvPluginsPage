<?php  

	/**
	* shipTypesModel
	*/
	class shipTypesModel
	{
		public $Id;
		//名称
		public $Name;
		//短名
		public $ShortName;
		//简称
		public $Abbreviation;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Name=$row['name'];
			$this->ShortName=$row['short_name'];
			$this->Abbreviation=$row['abbreviation'];
		}
	}
?>