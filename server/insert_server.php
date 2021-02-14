<?php
include("conn.php");
$name=$_POST['name'];
$age=$_POST['age'];
$result=$_POST['result'];
// $name="曹洪";
// $age=25;
// $result="98";
// $con = conn();
// $sql = "insert into result (name, age, result) values('$name', $age, '$result')";
// $result = mysqli_query($con, $sql);
$con = conn();
$stmt=$con->prepare("insert into result (name, age, result) values (?, ?, ?)");
$stmt->bind_param("sii",$name,$age,$result);
$stmt->execute();

if (mysqli_affected_rows($con)) {
	echo "添加成功!";
}else {
	echo "添加失败!";
}
$stmt->close();
$con->close();