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
			$this->Id=$row['Id'];
			$this->verId=$row['ver_id'];
			$this->des=$row['des'];
		}
	}
?>