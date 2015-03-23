<?php

	// config
	include_once(CORE_PATH.'/config.php');
	include_once(CORE_PATH.'/mysql_config.php');
	// models
	include_once(CORE_PATH.'/models/soft.php');
	include_once(CORE_PATH.'/models/soft_version.php');
	include_once(CORE_PATH.'/models/version_info.php');
	include_once(CORE_PATH.'/models/download_record.php');
	include_once(CORE_PATH.'/models/head_slider.php');
	include_once(CORE_PATH.'/models/nav_slider.php');
	include_once(CORE_PATH.'/models/functions_table.php');
	include_once(CORE_PATH.'/models/logs_table.php');
	include_once(CORE_PATH.'/models/page_info.php');
	include_once(CORE_PATH.'/models/download_count.php');
	// helper
	include_once(CORE_PATH.'/helper/http_helper.php');
	include_once(CORE_PATH.'/helper/html_helper.php');
	// sql helper
	include_once(CORE_PATH.'/sqlhelper/helper.php');
	include_once(CORE_PATH.'/sqlhelper/soft.php');
	include_once(CORE_PATH.'/sqlhelper/soft_version.php');
	include_once(CORE_PATH.'/sqlhelper/version_info.php');
	include_once(CORE_PATH.'/sqlhelper/download_record.php');
	include_once(CORE_PATH.'/sqlhelper/head_slider.php');
	include_once(CORE_PATH.'/sqlhelper/nav_slider.php');
	include_once(CORE_PATH.'/sqlhelper/functions_table.php');
	include_once(CORE_PATH.'/sqlhelper/logs_table.php');
	include_once(CORE_PATH.'/sqlhelper/page_info.php');

?>