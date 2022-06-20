<?php
include('connect.php');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$owner=$_POST['owner'];
	$sql="INSERT INTO furniture(FurnitureName,FurnitureOwnerName) values ('$name','$owner')";
	$result=mysqli_query($con,$sql);
	if ($result) {
		//echo "data inserted";
		header('location:display.php');
	}else{
		die(mysqli_error($con));
	}
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
				<p>
			<a href="home.php">HOME</a>
			<a href="furniture.php">FURNITURE</a>
			<a href="export.php">EXPORT</a>
			<a href="import.php">IMPORT</a>
			<a href="logout.php">LOGOUT</a>
		</p>
			
			</fieldset>
		</form>
		<form method="post">

		<fieldset>
		<p>FurnitureName
					<input type="text" name="name" required="">
					<p>FurnitureOwnerName
						<input type="text" name="owner" required="">
						<input type="submit" name="submit" value="INSERT"><br><br><br>
						<a href="display.php">View Furnitures</a>
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