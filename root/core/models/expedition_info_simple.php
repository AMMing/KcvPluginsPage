<?php  

	/**
	* expeditionInfoModel
	*/
	class expeditionInfoSimpleModel
	{
		public $id;
		//编号
		public $num;
		//名称
		public $name;
		//难度
		public $r;
		//海域
		public $a_id;
		//说明
		public $des;
		//所需时间
		public $time;
		//消耗的燃料
		public $c_fuel;
		//消耗的弹药
		public $c_ammun;
		//获取的基本燃料
		public $g_fuel;
		//获取的基本弹药
		public $g_ammun;
		//获取的基本钢
		public $g_steel;
		//获取的基本铝
		public $g_alumi;
		//获取的基本经验值
		public $g_exp;
		//获取的资材
		public $g_bm;
		//获取的高速建造
		public $g_hsb;
		//获取的高速修复
		public $g_hsr;
		//获取的家具箱（小）
		public $g_f_s;
		//获取的家具箱（中）
		public $g_f_m;
		//获取的家具箱（大）
		public $g_f_b;
		//等级总和
		public $sum_lv;
		//旗舰等级
		public $fs_lv;
		//旗舰类型
		public $fs_t;
		//需要多少艘船
		public $s_count;
		//需要带缶的数量
		public $b_count;
		//需要带缶船的数量
		public $bs_count;
		//说明（为空自动拼接数据说明）
		public $expl;
		//追加说明
		public $aexpl;
		//舰种详细
		public $s_types;
		//创建时间
		public $c_date;
		//修改时间
		public $u_date;

		function __construct($row)
		{
			$this->id=(int)$row['Id'];
			$this->num=(int)$row['number'];
			$this->name=$row['name'];
			$this->r=$row['rank'];
			$this->a_id=(int)$row['area_id'];
			$this->des=$row['description'];
			$this->time=(int)$row['time'];
			$this->c_fuel=(int)$row['consume_fuel'];
			$this->c_ammun=(int)$row['consume_ammunition'];
			$this->g_fuel=(int)$row['get_fuel'];
			$this->g_ammun=(int)$row['get_ammunition'];
			$this->g_steel=(int)$row['get_steel'];
			$this->g_alumi=(int)$row['get_aluminum'];
			$this->g_exp=(int)$row['get_exp'];
			$this->g_bm=$row['get_building_materials'];
			$this->g_hsb=$row['get_high_speed_building'];
			$this->g_hsr=$row['get_high_speed_repair'];
			$this->g_f_s=$row['get_furniture_small'];
			$this->g_f_m=$row['get_furniture_moderate'];
			$this->g_f_b=$row['get_furniture_big'];
			$this->sum_lv=(int)$row['sum_level'];
			$this->fs_lv=(int)$row['flagship_level'];
			$this->fs_t=(int)$row['flagship_type'];
			$this->s_count=(int)$row['ship_count'];
			$this->b_count=(int)$row['barrel_count'];
			$this->bs_count=(int)$row['barrel_ship_count'];
			$this->expl=$row['explanation'];
			$this->aexpl=$row['append_explanation'];
			// $this->s_types=$row['ship_types'];
			$this->c_date=$row['create_date'];
			$this->u_date=$row['update_date'];
		}

		function setShipTypes($data){
			$this->s_types=$data;
		}
	}
?>