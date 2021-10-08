<head>
	<link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>
	<center><h1 style="padding-bottom: 25px; padding-top: 25px; background:#999; margin-bottom: none;">RESULTS</h1></center>
<center>
<table id="timetable">
<tr>
<th>ROLLNO</th>
<th>NAME</th>
<th>SUBJECT-1</th>
<th>SUBJECT-2</th>
<th>SUBJECT-3</th>
<th>SUBJECT-4</th>
<th>SUBJECT-5</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student's data");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, subject1, subject2, subject3, subject4, subject5 FROM results";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td style=padding-left:20px;>" . $row["id"]. "</td><td style=padding-left:20px;>" . $row["name"] . "</td><td style=padding-left:20px;>"
. $row["subject1"]. "</td><td style=padding-left:20px;>"
. $row["subject2"]. "</td><td style=padding-left:20px;>"
. $row["subject3"]. "</td><td style=padding-left:20px;>"
. $row["subject4"]. "</td><td style=padding-left:20px;>"
. $row["subject5"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>
</body>