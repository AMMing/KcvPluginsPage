<?php  

	/**
	* expeditionShipModel
	*/
	class expeditionShipSimpleModel
	{
		public $id;
		//名称
		public $name;
		//短名
		public $sname;
		//简称
		public $abb;
		//需要数量
		public $count;
		//条件（如果数值一样则只需要满足一条即可）
		public $cond;
		//禁止（不能使用该类型）
		public $ban;

		function __construct($row)
		{
			$this->id=(int)$row['Id'];
			$this->name=$row['name'];
			$this->sname=$row['short_name'];
			$this->abb=$row['abbreviation'];
			$this->count=(int)$row['count'];
			$this->cond=(int)$row['conditions'];
			$this->ban=(int)$row['ban'];
		}
	}
?>