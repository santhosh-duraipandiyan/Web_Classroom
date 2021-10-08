<?php  
	$connect = mysqli_connect("localhost", "root", "", "student's data");
	$sql = "DELETE FROM results WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>