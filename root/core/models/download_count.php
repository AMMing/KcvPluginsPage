<?php  

	/**
	* downloadCountModel
	*/
	class downloadCountModel
	{
		public $name;
		public $downloadCount;
		function __construct($row)
		{
			$this->name=$row['name'];
			$this->downloadCount=(int)$row['count'];
		}
	}
?>