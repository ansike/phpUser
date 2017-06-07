<?php 
	include "../public/config/db.config.php";

	$id=$_GET['id'];

	$sql="delete from user where id={$id}";

	if (mysqli_query($link,$sql)) {
		echo "<script  >location='../index.php'</script>";
	}
 ?>