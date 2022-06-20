<?php
include('connect.php');
if (isset($_POST['submit'])) {
	$user=$_POST['name'];
	$password=$_POST['password'];
	

	$sql="INSERT INTO manager(username,password) values ('$user','$password')";
	$result=mysqli_query($con,$sql);
	if ($result) {
		//echo "data inserted";
		header('location:login.php');
	}else{
		die(mysqli_error($con));
	}

	
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user</title>
	<style type="text/css">
		div{
			border: 4px;
			border: 1px solid black;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
		}

	</style>
</head>
<body>
		<center>
			<form method="post">
				<h1><u><em>CARGO ltd</em></u></h1>
				<h2><u>Register Your Account</u></h2>
				<div>
				<p>Username
					<input type="text" name="name" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;<p>Password
						<input type="password" name="password" required="">
						
						<input type="submit" name="submit" value="SAVE"><br><br><br>&nbsp;&nbsp;
						<a href="dashboard.php">back</a>
						</div>
			</form>
		</center>
</body>
</html>