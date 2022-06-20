<?php
include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>display</title>
	<style type="text/css">
	div a{
			text-decoration: none;
               padding:5px;
               background-color: darkviolet;
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
		
	</style>
</head>
<body>

	<center>
		<form>
			<fieldset>
				<h1>CALGO ltd</h1>
				<div>
			<a href="home.php">HOME</a>
			<a href="furniture.php">FURNITURE</a>
			<a href="export.php">EXPORT</a>
			<a href="import.php">IMPORT</a>
		</div>
			</fieldset>
		</form>
<center>
		<table border="4">
			
			<tr>
				<th>FurnitureId</th>
				<th>FurnitureName</th>
				<th>FurnitureOwnerName</th>
				<th>operations</th>
				
			</tr>
		
	
	<tbody>
			<?php
			$sql="SELECT * FROM furniture";
			$result=mysqli_query($con,$sql);
			if ($result) {
			while ($row=mysqli_fetch_assoc($result)) {
					$id=$row['FurnitureId'];
					$name=$row['FurnitureName'];
					$owner=$row['FurnitureOwnerName'];
					
					
					echo'<tr>
						<th>'.$id.'</th>
						<td>'.$name.'</td>
						<td>'.$owner.'</td>
						
						<td>
				<button><a href="update.php? updateid='.$id.'">update</a></button>
				
				<button class="button"><a href="delete.php? deleteid='.$id.'">delete</a></button>
				
			</td>
						</tr>';
					}
				}
			?>
			
		</tbody>
	</table><br><br><br>
	<button><a href="furniture.php">Back</a></button><br><br><br>
	<button><a href="furniture.php">Add Furniture</a></button>

	</center>
</body>
</html>