<?php 
include 'public/config/db.config.php';

$sql="select * from user";

$result = mysqli_query($link, $sql);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style type="text/css">
 		td{
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 <center>
 	<h1><span>用户模块</span><a href="modules/add.php">添加用户</a></h1>
	<table width="500" border="1" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>用户名</th>
			<th>密码</th>
			<th>时间</th>
			<th>编辑</th>
			<th>删除</th>
		</tr>
		<?php 

		while ($row=mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>{$row['id']}</td>";
			echo "<td>{$row['username']}</td>";
			echo "<td>{$row['password']}</td>";
			echo "<td>{$row['time']}</td>";
			echo "<td><a href='modules/edit.php?id={$row['id']}'>编辑</a></td>";
			echo "<td><a href='modules/delete.php?id={$row['id']}'>删除</a></td>";
			echo "</tr>";
		}
		 ?>
	</table>
 </center>
 	
 </body>
 </html>