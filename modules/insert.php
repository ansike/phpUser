<?php 
	include "../public/config/db.config.php";
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="insert into user(username,password) values('{$name}','{$password}')";
	if (mysqli_query($link,$sql)) {
		echo "<script>location='../index.php'</script>";
	}
 ?>