<?php 

	include_once('../core/base.php');

	$key = $http->get("key");

	if($key==NULL){
		echo "error";
		exit;
	}



	$softSql=new softSql();
	$model=$softSql->getItemByKey($key);
	if($model!=NULL){
		$softVersionSql=new softVersionSql();
		$model=$softVersionSql->getItemBySoftId((int)$model->Id);

		$ip= $http->getIP2();
		$downloadRecordSql=new downloadRecordSql();
		$downloadRecordSql->addOrUpdate($model->Id,$ip);

		$http->redirect($model->path);
	}

	echo "error";
?>