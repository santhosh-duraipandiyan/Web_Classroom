<?php
$uname = $_REQUEST['uname'];

$msg = $_REQUEST['msg'];

$servername="localhost";

$username="root";

$password="";

$dbname="chatbox";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){

 die("connection fialed:" . $conn->connect_error);

}
// echo "connected successfully";

$sql="INSERT INTO `logs` (`username`,`msg`) VALUES ('$uname','$msg')";
if ($conn->query($sql)===TRUE){
// echo"<br>"."sent successfully"."<br>";
} else {
echo"ERROR:".$sql."<br>".$conn->error;
}

// $temp = "SELECT * FROM logs ORDER by id DESC";

// $result = $conn->query($temp);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br>" . "<b>" . $row["username"] . "</b>" . " : " . $row["msg"] . "<br>";
//     }

// } else {
//     echo "0 results";
// }

$conn->close();


?>