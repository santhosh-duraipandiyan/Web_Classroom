<?php

$servername="localhost";

$username="root";

$password="";

$dbname="on-test";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// //check connection
if($conn->connect_error){

 die("connection fialed:" . $conn->connect_error);

}
echo "connected successfully";

// $sql="INSERT INTO `test` (`question`,`answer`,`choice-A`,`choice-B`,`choice-C`) VALUES ('$question','$answer','$choice1','$choice2','$choice3')";
// if ($conn->query($sql)===TRUE){
// echo"<br>"."sent successfully"."<br>";
// } else {
// echo"ERROR:".$sql."<br>".$conn->error;
// }

$conn->close();


?>