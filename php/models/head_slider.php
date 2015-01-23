<?php  

	/**
	* softModel
	*/
	class headSliderModel
	{
		public $Id;
		public $img;
		public $avatarLeft;
		public $titleLeft;
		public $color;
		public $title;
		public $des;
		public $order;

		function __construct($row)
		{
			$this->Id=$row['Id'];
			$this->img=$row['img'];
			$this->avatar_left=$row['avatar_left'];
			$this->title_left=$row['title_left'];
			$this->color=$row['color'];
			$this->title=$row['title'];
			$this->des=$row['des'];
			$this->order=$row['order'];
		}
	}
?>