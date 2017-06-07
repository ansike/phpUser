<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加用户</title>
	<style type="text/css">
		h2{
			text-align: center;	
		}
		form{
			width: 300px;
			margin: auto;
		}
		form label{
			width: 100px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<h2>添加用户</h2>
	<form action="insert.php" method="post">
		<p><label >用户名</label><input type="text" name="username"></p>
		<p><label >密码</label><input type="password" name="password"></p>
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>

	</form>
</body>
</html>