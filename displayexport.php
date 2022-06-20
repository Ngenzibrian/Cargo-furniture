<?php
include('connect.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>report</title>
	<style type="text/css">
		a{
			text-decoration: none;
		}

	</style>
</head>
<body>
<center>
	<h1><u><em>Export Report</em></u></h1>

	<table border="4">
		<tr>
			<th>FurnitureName</th>
			<th>ExportDate</th>
			
			<th>Quantity</th>

		</tr>
		
	
	<tbody>
			<?php
			$sql="SELECT * FROM import";
			$result=mysqli_query($con,$sql);
			if ($result) {
			while ($row=mysqli_fetch_assoc($result)) {
					$id=$row['FurnitureId'];
					$date=$row['ImportDate'];
					$quantity=$row['Quantity'];
					
					
					echo'<tr>
						<th>'.$id.'</th>
						<td>'.$date.'</td>
						<td>'.$quantity.'</td>
						
						</tr>';
					}
					}
						?>
						</tbody>
						</table>

<button><a href="export.php">Back</a></button>
</center>
</body>
</html>