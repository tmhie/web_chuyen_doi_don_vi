<?php session_start(); $connect = new MySQLi("localhost","root","","customer");?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		if(empty($_SESSION['admin'])){
			include "../admin1/loginadmin.php";
		}else{
			include "../admin1/cpanel.php";
		}
	 ?>
</body>
</html>