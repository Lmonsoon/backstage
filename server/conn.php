<?php
include ("datacc.php");
function  conn(){
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PWD);
	if(!$con){
		exit('连接数据库失败');
	}
	$db = mysqli_select_db($con, DB_NAME);
	if(!$db){
		exit('连接数据库失败');
	}
	mysqli_set_charset($con, DB_CHARSET);
	return $con;
}