<?php  

	/**
	* expeditionShipModel
	*/
	class expeditionShipModel
	{
		public $Id;
		//名称
		public $Name;
		//短名
		public $ShortName;
		//简称
		public $Abbreviation;
		//需要数量
		public $Count;
		//条件（如果数值一样则只需要满足一条即可）
		public $Conditions;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Name=$row['name'];
			$this->ShortName=$row['short_name'];
			$this->Abbreviation=$row['abbreviation'];
			$this->Count=(int)$row['count'];
			$this->Conditions=(int)$row['conditions'];
		}
	}
?>