<?php
	include "../public/config/db.config.php";
	$id=$_GET['id'];
	$sql="select * from user where id={$id}";
	$result = mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑用户</title>
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
	<form action="update.php" method="post">
		<p><label >用户名</label><input type="text" name="username" value="<?php echo $row['username'];?>"></p>
		<p><label >密码</label><input type="text" name="password" value="<?php echo $row['password'];?>"></p>
		<p><input type="hidden" name="id" value="<?php echo $id;?>"><input type="submit" value="提交"><input type="reset" value="重置"></p>

	</form>
</body>
</html>