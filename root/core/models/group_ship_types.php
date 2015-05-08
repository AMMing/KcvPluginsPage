<?php  

	/**
	* groupShipTypesModel
	*/
	class groupShipTypesModel
	{
		public $Id;
		//备注
		public $Remark;
		//包含舰种
		public $ShipTypes;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Remark=$row['remark'];
		}
		
		function setShipTypes($data){
			$this->ShipTypes=$data;
		}
	}
?>