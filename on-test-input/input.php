<?php

error_reporting(E_ALL ^ E_NOTICE); 

$question = $_REQUEST['question'];

$answer = $_REQUEST['answer'];

$choice1 = $_REQUEST['choice1'];

$choice2 = $_REQUEST['choice2'];

$choice3 = $_REQUEST['choice3'];

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
echo "connected successfully.....   ";

$sql="INSERT INTO `test` (`question`,`answer`,`choice-A`,`choice-B`,`choice-C`) VALUES ('$question','$answer','$choice1','$choice2','$choice3')";
if ($conn->query($sql)===TRUE){
echo"sent successfully";
} else {
echo"ERROR:".$sql."<br>".$conn->error;
}

// $temp = "SELECT * FROM test ORDER by id DESC";

// $result = $conn->query($temp);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br>" . "<b>" . $row["question"] . "</b>" . " : " . $row["choice-A"] . "<br>" . " : " . $row["choice-B"] . "<br>" . " : " . $row["choice-C"] . "<br>" . " : " . $row["choice-answer"] . "<br>";
//     }

// } else {
//     echo "0 results";
// }

$conn->close();


?>


