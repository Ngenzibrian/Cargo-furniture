<?php
include('connect.php');
if (isset($_POST['update'])) {
	$name=$_POST['names'];
	$owner=$_POST['owner'];
	$id=$_GET['updateid'];
	
	$sql="UPDATE furniture SET FurnitureName='$name',FurnitureOwnerName='$owner' WHERE FurnitureId='$id'";
	$result=mysqli_query($con,$sql);
	if ($result) {
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
	<title>update</title>
</head>
<body>
	<center>
	<form method="post">
		<?php
		if (isset($_GET['updateid'])) {
			$id=$_GET['updateid'];
			$sql="SELECT * FROM furniture WHERE FurnitureId='$id'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
		}
		?>
		<fieldset>
			
				
					<input type="hidden" name="id" value="<?php echo $row['FurnitureId'];?>">
					<p>Furniture_name
					<input type="text" name="names" value="<?php echo $row['FurnitureName'];?>">
					
				<p>Furniture_Owner_name
					<input type="text" name="owner" value="<?php echo $row['FurnitureOwnerName'];?>"><br><br><br>
					<input type="submit" name="update" value="Update">
					<br><br><br>
	<button><a href="display.php">Back</a></button>
			
		</fieldset>
		</form>
	</center>
</body>
</html>