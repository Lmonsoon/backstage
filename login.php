<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<style>
			tr{
				text-align: center;
				font-size: 20px;
				
			}
		</style>
	</head>
	<body>
	<div class="container">
	<h2 style="text-align: center;">学生成绩管理系统</h2>
	<form action="server/user_server.php" method="post">
	 <table class="table table-striped table-bordered">
	   <tr>
			   <td>用户名:</td>
			   <td><input type="text" class="form-control" name="name" placeholder="user"></td>
		   </tr>
	   <tr>
	   		   <td>密码:</td>
	   		   <td> <input type="password" class="form-control" name="password" placeholder="Password"></td>
	   </tr>
	   <tr>
			<td><button type="submit" class="btn btn-success">登陆</button></td>
			<td><span><?php echo isset($_GET['message']) ? $_GET['message'] : "";?></span></td>
			
	   </tr>
	 </table>
	</form>
	</div>	
		
	</body>
</html>
