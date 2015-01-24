<?php  

	/**
	* mysql helper
	*/
	class mysqlHelper
	{
		function getConn(){
			$conn=mysql_connect(MYSQL_SERVER_NAME,MYSQL_USERNAME,MYSQL_PASSWORD);
			mysql_select_db(MYSQL_DATABASE,$conn);

			return $conn;
		}
		function getList($sql){
			$conn =$this->getConn();

			$list=array();
			$result=mysql_query($sql,$conn);
			if(mysql_num_rows($result)>0){
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC )) {
					array_push($list, $row);
			    }
			}
			mysql_close($conn);

			return $list;
		}
		function getItem($sql){
			$conn =$this->getConn();

			$result=mysql_query($sql,$conn);
			if(mysql_num_rows($result)<=0){
				mysql_close($conn);
				return null;
			}
			$row = mysql_fetch_assoc($result);
			mysql_close($conn);

			return $row;
		}
		function addItem($sql){
			$conn =$this->getConn();

			$result=mysql_query($sql,$conn);
			mysql_close($conn);

			return $result;
		}
	}
?>