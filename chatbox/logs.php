<?php

$servername="localhost";

$username="root";

$password="";

$dbname="chatbox";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

$temp = "SELECT * FROM logs ORDER by id DESC";

$result = $conn->query($temp);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "<b>" . $row["username"] . "</b>" . " : " . $row["msg"] . "<br>";
    }

} else {
    echo "0 results";
}

$conn->close();


?>