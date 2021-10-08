<?php
$servername="localhost";
$username="root";
$password="";
$dbname="on-test";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

mysqli_query($conn,'TRUNCATE TABLE test');

echo "cleard successfullly";

$conn->close();

?>