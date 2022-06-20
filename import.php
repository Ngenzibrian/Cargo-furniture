<?php
include('connect.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$date=$_POST['date'];
	$quantity=$_POST['quantity'];
	$sql="INSERT INTO import(FurnitureId,ImportDate,Quantity) values ('$id','$date','$quantity')";
	$result=mysqli_query($con,$sql);
	if ($result) {
		//echo "data inserted";
	}else{
		echo("enter data");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>calgo</title>
	<style type="text/css">
		
		div a{
			text-decoration: none;
               padding:5px;
               background-color: darkgoldenrod;
               color: white;
               font-weight:bold;
               border-radius:5px;
		}
		.button{
			background-color: springgreen;
		}
		button{
			background-color: navajowhite;

		}
		a{
			text-decoration: none;
		}
		
	</style>
</head>
<body>
	<center>
		<form method="post">
			<fieldset>
				<h1>CALGO ltd</h1>
				<div>
			<a href="home.php">HOME</a>
			<a href="furniture.php">FURNITURE</a>
			<a href="export.php">EXPORT</a>
			<a href="import.php">IMPORT</a>
			<a href="logout.php">LOGOUT</a>
		</div>
		<h2><em><u>Import Furniture</u></em></h2>
		<select name="id">
			<option>select</option>
			<?php
				$sql="SELECT * FROM furniture";
				$result=mysqli_query($con,$sql);
				while ($row=mysqli_fetch_array($result)) {?>
					<option value="<?php echo $row['FurnitureId']?>"><?php echo $row['FurnitureName']?></option>
				<?php }
			?>
			
		</select>
		<p>Import date
			<input type="date" name="date">
			<p>Quantity
				<input type="text" name="quantity">
				<input type="submit" name="submit" value="Enter"><br><br><br>
				<button><a href="report.php">Import Report</a></button>
					<div id="footer">
				<h3>
				&copy Cargo Ltd
				</h3> 
				
			</div>
		
			</fieldset>
		</form>
		
</body>
</html>