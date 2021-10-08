<?php  
	$connect = mysqli_connect("localhost", "root", "", "student's data");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE results SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>