<?php 

	include_once('../base.php');

	$key = $http->get("key");

	if($key==NULL){
		echo "not flie.";
		exit;
	}



	$softSql=new softSql();
	$model=$softSql->getItemByKey($key);
	if($model!=NULL){
		$softVersionSql=new softVersionSql();
		$model=$softVersionSql->getItemBySoftId((int)$model->Id);

		$ip= $http->getIP();
		$downloadRecordSql=new downloadRecordSql();
		$downloadRecordSql->addOrUpdate($model->Id,$ip);

		$http->redirect($model->path);
	}

	echo "not flie.";
?>