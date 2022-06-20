<?php
	session_start();
	if (empty($_SESSION['name'])) {
		header('location:user.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>calgo</title>
	<style type="text/css">
		
		a{
			text-decoration: none;
               padding:5px;
               background-color: darkgrey;
               color: white;
               font-weight:bold;
               border-radius:5px;
		}
	</style>
</head>
<body>
	<center>
		<form>
			<fieldset>
				<h1>CALGO ltd</h1>
			<a href="home.php">HOME</a>
			<a href="furniture.php">FURNITURE</a>
			<a href="export.php">EXPORT</a>
			<a href="import.php">IMPORT</a>
			<a href="logout.php">LOGOUT</a>
				<br><br><br><br>
			<div id="footer">
				<h3>
				&copy Cargo Ltd
				</h3> 
				
			</div>
			</fieldset>
		</form>

	</center>
</body>
</html>