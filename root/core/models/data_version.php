<?php  

	/**
	* dataVersionModel
	*/
	class dataVersionModel
	{
		public $Id;

		public $Version;

		public $Guid;

		public $UpdateDate;

		public $Remark;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Version=$row['version'];
			$this->Guid=$row['guid'];
			$this->UpdateDate=$row['update_date'];
			$this->Remark=$row['remark'];
		}
	}
?>