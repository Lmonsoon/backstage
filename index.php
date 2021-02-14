<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<style>
			tr,th{
				text-align: center;
				font-size: 20px;
				
			}
			
			
		</style>
	</head>
	<body>
	<div class="container">
		<h2 style="text-align: center;">学生成绩管理系统</h2>
	
	 <table class="table table-striped table-bordered table-hover">
	<tr>
		<th>id</th>
		<th>姓名</th>
		<th>年龄</th>
		<th>成绩</th>
		<th>功能</th>
	</tr>
	<?php
	 require_once('./server/conn.php');
	 $sql="select * from result";
	$con = conn();
	 $result=mysqli_query($con, $sql);
	 if($result){
		while($row=mysqli_fetch_assoc($result)){
			?>
			
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?=$row['name']?></td>
				<td><?= $row['age'] ?></td>
				<td><?= $row['result'] ?></td>
				<td>
					<button  class="btn btn-info btn-lg" onclick="toUpdate(<?= $row['id'] ?>)">修改</button>
					<button  class="btn btn-info btn-lg" onclick="remove(<?= $row['id'] ?>)">删除</button>
				</td>
			</tr>
			<?php
		}
	 }
	 $con->close();
	?>
	 <tr>
		 <td colspan="5">
		 <a href="insert.php"><button  class="btn btn-info btn-lg">添加</button></a></td>
	 </tr>
	 </table>
	
	</div>	
		<script>
			function remove(id){
				window.location.href="server/remove._server.php?id="+ id;
			}
			function toUpdate(id){
				window.location.href="./update.php?id=" + id;
				
			}
		</script>
	</body>
</html>
