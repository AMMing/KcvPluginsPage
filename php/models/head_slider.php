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
			$this->Id=(int)$row['Id'];
			$this->img=$row['img'];
			$this->avatarLeft=(int)$row['avatar_left'];
			$this->titleLeft=(int)$row['title_left'];
			$this->color=$row['color'];
			$this->title=$row['title'];
			$this->des=$row['des'];
			$this->order=(int)$row['order'];
		}
	}
?>