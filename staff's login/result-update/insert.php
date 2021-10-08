<?php  
$connect = mysqli_connect("localhost", "root", "", "student's data");
$sql = "INSERT INTO results(name, subject1, subject2, subject3, subject4, subject5) VALUES('".$_POST["name"]."', '".$_POST["subject1"]."', '".$_POST["subject2"]."', '".$_POST["subject3"]."', '".$_POST["subject4"]."', '".$_POST["subject5"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>