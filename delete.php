<?php

include 'connect.php';
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	$sql="DELETE FROM furniture WHERE FurnitureId=$id";
	$result=mysqli_query($con,$sql);
	if ($result) {
		//echo "deleted successfully";
		header('location:display.php');
	}else{
		die(mysqli_error($con));
	}
}

?>