<?php  

	/**
	* softModel
	*/
	class versionInfoModel
	{
		public $Id;
		public $verId;
		public $des;
		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->verId=(int)$row['ver_id'];
			$this->des=$row['des'];
		}
	}
?>