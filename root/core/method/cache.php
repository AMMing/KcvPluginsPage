<?php

	/**
	* 
	*/
	class cacheMethod
	{
		public $filehelper;
		public $path;
		public $verid;
		function __construct()
		{
			$this->filehelper=new fileHelper();
			$this->path=ROOT_PATH.'/cache/expeditionInfo.txt';
			$this->verid=1;
		}

		function getBySql(){
			$dataVersionSql=new dataVersionSql();
		    $item=$dataVersionSql->getItem($this->verid);
			$expeditionInfoSql=new expeditionInfoSql();
		    $list=$expeditionInfoSql->getList();

		    $newitem =new dataVersionResultModel();
		    $newitem->Id = $item->Id;
		    $newitem->Version = $item->Version;
		    $newitem->Guid = $item->Guid;
		    $newitem->UpdateDate = $item->UpdateDate;
		    $newitem->Remark = $item->Remark;
		    $newitem->Data = $list;

		    return $newitem;
		}
		function getByFile(){
			if(!file_exists($this->path)){
				return null;
			}
			$json= $this->filehelper->read($this->path);

			return $json;
		}

		function saveToFile($val){
			$this->filehelper->save($this->path,$val);
		}

		function DataIsNew($data){
			if($data==null||$data->Guid==null){
				return false;
			}
			$dataVersionSql=new dataVersionSql();
		    $item=$dataVersionSql->getItem($this->verid);

		    return $data->Guid==$item->Guid&&!is_null($data->Data)&& count($data->Data)>0;
		}

		function get(){
			$json=$this->getByFile();
			$data=json_decode($json);
			if(!$this->DataIsNew($data)){
				$data=$this->getBySql();
				$json=json_encode($data);
				$this->saveToFile($json);
			}

			return $data;
		}
	}
?>