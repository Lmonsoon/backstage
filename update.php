
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
		<td><input type="text" class="form-control" placeholder="Jane Doe" name="name" value="<?=$data['name']?>"></td>
	</tr>
	<tr>
		<td>年龄</td>
		<td><input type="text" class="form-control" placeholder="Jane Doe" name="age" value="<?=$data['age']?>"></td>
	</tr>
	<tr>
		<td>成绩</td>
		<td><input type="text" class="form-control" placeholder="Jane Doe" name="result" value="<?=$data['result']?>"></td>
	</tr>
	<tr>
		<td colspan="2">
	<button  class="btn btn-info btn-lg" >修改</button>
		</td>
	</tr>
	 </table>
	
	</div>	
		<script type="module">
			import Ajax from './js/network.js'
			var button =document.querySelector('.btn');
			var id;
			button.addEventListener('click',update)
			window.onload=function(){
				 id=<?=$_GET['id'] ?>;
				 Ajax.get(`./server/select_server.php?id=${id}`,fu)
			// var xhr = new XMLHttpRequest();
			// xhr.open("GET", "./server/select_server.php?id="+ id, false);
			// xhr.send();
			// var data =JSON.parse(xhr.responseText);
			// var name=document.getElementsByName("name") [0].value=data.name;
			// var age=document.getElementsByName("age") [0].value=data.age;
			// var result=document.getElementsByName("result") [0].value=data.result;
			
			}
   function update(){
			var name=document.getElementsByName("name") [0].value;
			var age=document.getElementsByName("age") [0].value;
			var result=document.getElementsByName("result") [0].value;
			var xhr = new XMLHttpRequest();
			// xhr.open("POST", "./server/update_scrver.php", false);
			// // var id=id;
			// xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			
			// console.log("id="+ id +"&name=" + name + "&age=" + age + "&result=" + result)
			// 	xhr.send("id="+ id +"&name=" + name + "&age=" + age + "&result=" + result);
				
			// 	alert(xhr.responseText);
			console.log(`name=${name}&age=${age}&result=${result}`)
			Ajax.post('./server/update_scrver.php',`id=${id}&name=${name}&age=${age}&result=${result}`,fn)
			window.location.href="index.php";}
			function fn(a){
				alert(a);
				
			}
			function fu(data){
				console.log(data);
				var data =JSON.parse(data);
				var name=document.getElementsByName("name") [0].value=data.name;
				var age=document.getElementsByName("age") [0].value=data.age;
				var result=document.getElementsByName("result") [0].value=data.result;
			}
		</script>
	</body>
</html>