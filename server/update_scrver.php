<?php
include("conn.php");
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$result1=$_POST['result'];
$con=conn();
$sql="update result set name = '" . $name . "' ,age =$age, result=$result1 where id=$id";
$result=mysqli_query($con, $sql);

 if ($result && mysqli_affected_rows($con)) {
 	echo "修改成功！";
 }else {
 	echo "修改失败！";
 }	
 $con->close();