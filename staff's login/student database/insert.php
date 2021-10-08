<?php  
$connect = mysqli_connect("localhost", "root", "", "student's data");
$sql = "INSERT INTO students(rollno, name, age, address, phno) VALUES('".$_POST["rollno"]."', '".$_POST["name"]."', '".$_POST["age"]."', '".$_POST["address"]."', '".$_POST["phno"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>