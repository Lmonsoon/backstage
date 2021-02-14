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
	
	 <table class="table table-striped table-bordered table-hover">
	<tr>
		<td>姓名</td>
		<td><input type="text" class="form-control" name="name" placeholder="Jane Doe"></td>
	</tr>
	<tr>
		<td>年龄</td>
		<td><input type="text" class="form-control" name="age" placeholder="Jane Doe"></td>
	</tr>
	<tr>
		<td>成绩</td>
		<td><input type="text" class="form-control" name="result" placeholder="Jane Doe"></td>
	</tr>
	<tr>
		<td colspan="2">
	<button  class="btn btn-info btn-lg" ">添加</button>
		</td>
	</tr>
	 </table>
	
	</div>	
	
		<script type="module">
			console.log(123)
			import Ajax from './js/network.js'
			var button =document.querySelector('.btn');
			
			button.addEventListener('click',insert)
			function insert(){
				var name=document.getElementsByName("name") [0].value;
				var age=document.getElementsByName("age") [0].value;
				var result=document.getElementsByName("result") [0].value;
				Ajax.post('./server/insert_server.php',`name=${name}&age=${age}&result=${result}`,fn)
				// var xhr = new XMLHttpRequest();
				// xhr.open('POST', './server/insert_server.php', false);
				// xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					
				// 	xhr.send("name=" + name + "&age=" + age + "&result=" + result);
				// 	alert(xhr.responseText);
				// 	console.log(xhr.responseText);
				
					
				window.location.href="index.php";
			}
			function fn(a){
				alert(a);
				console.log(a);
			}
		</script>
	</body>
</html>
