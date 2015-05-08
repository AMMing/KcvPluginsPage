<?php  

	/**
	* expeditionShipTypesKcModel
	*/
	class expeditionShipTypesKcModel
	{
		//类型id
		public $GroupId;
		//需要数量
		public $Count;
		//禁止（不能使用该类型）
		public $Ban;

		function __construct($row)
		{
			$this->GroupId=(int)$row['group_Id'];
			$this->Count=(int)$row['count'];
			$this->Ban=(int)$row['ban'];
		}
	}
?>