<?php  

	/**
	* expeditionShipTypesModel
	*/
	class expeditionShipTypesModel
	{
		public $Id;
		//远征id
		public $ExpeditionId;
		//类型id
		public $ShipTypesId;
		//需要数量
		public $Count;
		//条件（如果数值一样则只需要满足一条即可）
		public $Conditions;
		//禁止（不能使用该类型）
		public $Ban;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->ExpeditionId=(int)$row['expedition_Id'];
			$this->ShipTypesId=(int)$row['shiptypes_Id'];
			$this->Count=(int)$row['count'];
			$this->Conditions=(int)$row['conditions'];
			$this->Ban=(int)$row['ban'];
		}
	}
?>