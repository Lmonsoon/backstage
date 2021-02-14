<?php
include("conn.php");
$id=$_GET['id'];
$sql="delete from result where id='$id'";
$con=conn();
$result=mysqli_query($con, $sql);
if ($result && mysqli_affected_rows($con)) {
	echo "删除成功！";
}else {
	echo "删除失败！";
}	
$con->close();
header("location:../index.php");