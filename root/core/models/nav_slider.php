<?php  

	/**
	* navSliderModel
	*/
	class navSliderModel
	{
		public $Id;
		public $img;
		public $order;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->img=$row['img'];
			$this->order=(int)$row['order'];
		}
	}
?>