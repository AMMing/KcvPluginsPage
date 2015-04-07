<?php  

	/**
	* expeditionInfoModel
	*/
	class expeditionInfoModel
	{
		public $Id;
		//编号
		public $Number;
		//名称
		public $Name;
		//难度
		public $Rank;
		//海域
		public $AreaId;
		//说明
		public $Description;
		//所需时间
		public $Time;
		//消耗的燃料
		public $ConsumeFuel;
		//消耗的弹药
		public $ConsumeAmmunition;
		//获取的基本燃料
		public $GetFuel;
		//获取的基本弹药
		public $GetAmmunition;
		//获取的基本钢
		public $GetSteel;
		//获取的基本铝
		public $GetAluminum;
		//获取的基本经验值
		public $GetExp;
		//获取的资材
		public $GetBuildingMaterials;
		//获取的高速建造
		public $GetHighSpeedBuilding;
		//获取的高速修复
		public $GetHighSpeedRepair;
		//获取的家具箱（小）
		public $GetFurnitureSmall;
		//获取的家具箱（中）
		public $GetFurnitureModerate;
		//获取的家具箱（大）
		public $GetFurnitureBig;
		//等级总和
		public $SumLevel;
		//旗舰等级
		public $FlagshipLevel;
		//旗舰类型
		public $FlagshipType;
		//需要多少艘船
		public $ShipCount;
		//需要带缶的数量
		public $BarrelCount;
		//需要带缶船的数量
		public $BarrelShipCount;
		//说明（为空自动拼接数据说明）
		public $Explanation;
		//追加说明
		public $AppendExplanation;
		//舰种详细
		public $ShipTypes;
		//创建时间
		public $CreateDate;
		//修改时间
		public $UpdateDate;

		function __construct($row)
		{
			$this->Id=(int)$row['Id'];
			$this->Number=(int)$row['number'];
			$this->Name=$row['name'];
			$this->Rank=$row['rank'];
			$this->AreaId=(int)$row['area_id'];
			$this->Description=$row['description'];
			$this->Time=(int)$row['time'];
			$this->ConsumeFuel=(int)$row['consume_fuel'];
			$this->ConsumeAmmunition=(int)$row['consume_ammunition'];
			$this->GetFuel=(int)$row['get_fuel'];
			$this->GetAmmunition=(int)$row['get_ammunition'];
			$this->GetSteel=(int)$row['get_steel'];
			$this->GetAluminum=(int)$row['get_aluminum'];
			$this->GetExp=(int)$row['get_exp'];
			$this->GetBuildingMaterials=$row['get_building_materials'];
			$this->GetHighSpeedBuilding=$row['get_high_speed_building'];
			$this->GetHighSpeedRepair=$row['get_high_speed_repair'];
			$this->GetFurnitureSmall=$row['get_furniture_small'];
			$this->GetFurnitureModerate=$row['get_furniture_moderate'];
			$this->GetFurnitureBig=$row['get_furniture_big'];
			$this->SumLevel=(int)$row['sum_level'];
			$this->FlagshipLevel=(int)$row['flagship_level'];
			$this->FlagshipType=(int)$row['flagship_type'];
			$this->ShipCount=(int)$row['ship_count'];
			$this->BarrelCount=(int)$row['barrel_count'];
			$this->BarrelShipCount=(int)$row['barrel_ship_count'];
			$this->Explanation=$row['explanation'];
			$this->AppendExplanation=$row['append_explanation'];
			// $this->ShipTypes=$row['ship_types'];
			$this->CreateDate=$row['create_date'];
			$this->UpdateDate=$row['update_date'];
		}
	}
?>