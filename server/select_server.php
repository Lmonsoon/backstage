<?php
include("conn.php");
$id=$_GET['id'];
$con=conn();
$sql="select * from result where id='$id'";
$result=mysqli_query($con, $sql);
$results= array();

if ($result && mysqli_affected_rows($con)) {
	while($row=mysqli_fetch_assoc($result)){
		$results =$row;
	}
	echo json_encode($results);
}else {
	echo "未找到数据！";
}	
$con->close();
