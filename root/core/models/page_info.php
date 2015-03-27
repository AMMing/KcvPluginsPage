<?php  

	/**
	* pageInfoModel
	*/
	class pageInfoModel
	{
		public $Id;
		public $title;
		public $brief;
		public $content;
		public $updatetime;

		public $headTitle;
		public $headKeyword;
		public $headDes;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->title=$row['title'];
			$this->brief=$row['brief'];
			$this->content=$row['content'];
			$this->updatetime=$row['updatetime'];

			$this->headTitle=$row['head_title'];
			$this->headKeyword=$row['head_keyword'];
			$this->headDes=$row['head_des'];
		}
	}
?>