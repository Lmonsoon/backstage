<?php
include ("conn.php");
$account =$_POST['user'];
$password=$_POST['password'];
$con = conn();
$sql = "select id from user where account = '$account' and password='$password'";


$result = mysqli_query($con, $sql);
if ($result && mysqli_affected_rows($con)) {
	$_SESSION["user.account"]=$account;
	$result->free_result();
	$con->close();
	header("location:../index.php");
}else {
	$result->free_result();
	$con->close();
	header("location:../login.php?message=用户名或密码错误");
}