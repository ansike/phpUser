<?php 
	include "../public/config/db.config.php";
	$id=$_POST['id'];
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="update user set username='{$name}',password='{$password}' where id={$id}";
	if (mysqli_query($link,$sql)) {
		echo "<script>location='../index.php'</script>";
	}
 ?>