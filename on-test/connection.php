<?php

$servername="localhost";
$username="root";
$password="";
$dbname="on-test";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
 die("connection fialed:" . $conn->connect_error);
}
// echo "connected successfully"
?>