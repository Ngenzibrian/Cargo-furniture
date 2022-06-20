<?php
include('connect.php');
if (isset($_POST['submit'])) {
	$user=$_POST['name'];
	$password=$_POST['password'];
	$sql="SELECT*FROM manager WHERE UserName='$user'";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_array($result)) {
			if ($password==$row['Password']) {
				session_start();
				$_SESSION['name']=$user;
				header('location:home.php');
			}else{
				echo "<script>alert('wrong credentials')</script>";
			}
		}
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
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
	<form method="post">
		<center>
			<h1><u><em>CARGO ltd</em></u></h1>
			<h2><u>LOGIN</u></h2>
			<div>
			<p>Username
				<input type="text" name="name" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp; <p>password
					<input type="password" name="password"&nbsp; required="">
					<input type="submit" name="submit" value="login"><br><br>
					<a href="dashboard.php">back</a>
</div>
		</center>
		
	</form>
</body>
</html>