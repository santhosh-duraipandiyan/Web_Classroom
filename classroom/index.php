<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>classroom</title>

	<link rel="stylesheet" type="text/css" href="style.php">
	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
	<!-- animation on scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

	<div id="header">

			<ul>
 				<li><a href="#innercontent1" class="scroll">Home</a></li><font size="5">|</font>
 				<li><a href="#innercontent2" class="scroll">Time-Table</a></li><font size="5">|</font>
        <li><a href="#innercontent3" class="scroll">Test</a></li><font size="5">|</font>
 				<li><a href="#innercontent4" class="scroll">Chat</a></li><font size="5">|</font>
 				<li><a href="#innercontent5" class="scroll">Notes</a></li><font size="5">|</font>
 				<li><!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?></li>
 			</ul>
		
	</div>

	<ul id="login">
    		<li><a href="chatbox"><i class="far fa-comment" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200"></i></a></li><br>
    		<li><a href="on-test"><i class="fas fa-pen-nib" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"></i></a></li><br>
    		<li><a href="http://localhost/clg-project/class-rep/file-upload-download/downloads.php"><i class="fas fa-book" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400"></i></a></li><br>
    	</ul>

	<div id="content">
     <div id="innercontent1">
		<p id="wc-class">Welcome<br>to class<br><strong><?php echo $_SESSION['username']; ?></strong></p>
     </div>
<div id="innercontent2">
<!-- timetable -->
<center>
<table id="timetable">
<tr>
<th>S.no</th>
<th>DAY</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "timetable");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, day, first, second, third, fourth, fifth FROM tb";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td style=padding-left:20px;>" . $row["id"]. "</td><td style=padding-left:20px;>" . $row["day"] . "</td><td>"
. $row["first"]. "</td><td style=padding-left:20px;>"
. $row["second"]. "</td><td style=padding-left:20px;>"
. $row["third"]. "</td><td style=padding-left:20px;>"
. $row["fourth"]. "</td><td style=padding-left:20px;>"
. $row["fifth"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>

	</div>
  <div id="innercontent3">
    <div id="innercontent3-1">

                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">TEST</h1>

                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">A test or examination (informally, exam or evaluation) is an assessment intended to measure a test-taker's knowledge, skill, aptitude, physical fitness, or classification in many other topics (e.g., beliefs). ... Formal testing often results in a grade or a test score. <span  style="color: orange;">LETS GET STARTED</span></p>

                <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300" id="learnmorelink-1"><a href="on-test">Get started &#187;</a></div>

            </div>

            <div id="innercontent3-2">
              <img src="http://pngimg.com/uploads/notebook/notebook_PNG19206.png" width="80%" height="auto" style="margin-right: 50px;">
            </div>
  </div>
  <div id="innercontent4">
     <div id="innercontent4-1">

                <h1 data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">CHAT</h1>

                <p data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200" style="font-size: 22px;">Chat refers to the process of communicating, interacting and/or exchanging messages over the Internet. It involves two or more individuals that communicate through a chat-enabled service or software. Chat is also known as chatting, online chat or Internet chat.<span  style="color: orange;">LETS GET STARTED</span></p>

                <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300" id="learnmorelink-2"><a href="chatbox">Get started &#187;</a></div>

            </div>

            <div id="innercontent4-2">
              <img src="https://png2.kisspng.com/sh/dceafaf717450aa6a6d96e179183cba7/L0KzQYm3VMIxN6V1j5H0aYP2gLBuTfNwdaF6jNd7LXnmf7B6TfNwdqdqiuVqdHnyfn7qiPF1fJpzf58AYXS8cYi8g8c1PZdnTpCCMUS8R4G6VcE2OmU3SaUAOUa3R4eATwBvbz==/kisspng-computer-icons-conversation-chatting-5ad9a75c745fb6.7149703515242135964767.png" width="80%" height="auto" style="margin-left: 50px;">
            </div>
  </div>
  <div id="innercontent5">
        <div id="innercontent5-1">

                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">NOTES</h1>

                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">Note-taking is the practice of recording information captured from another source. By taking notes, the writer records the essence of the information, freeing their mind from having to recall everything.Notes are commonly drawn from a transient source, such as an oral discussion at a meeting, or a lecture, in which case the notes may be the only record of the event.<span  style="color: orange;">LETS GET STARTED</span></p>

                <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300" id="learnmorelink-1"><a href="http://localhost/clg-project/class-rep/file-upload-download/downloads.php">Get started &#187;</a></div>

            </div>

            <div id="innercontent5-2">
              <img src="https://png2.kisspng.com/sh/dc2af8fe66735cfbbeeee701832b1bcd/L0KzQYm3UcMxN5Jnj5H0aYP2gLBuTfV2a51ufNdqbj35dbT7jCIuepZ4hAd7Y3WwebT2jr1ndJJ5RdV7ZXH3ecfsTfVlfZRmjNt4bj24cYi3V8U3amhoTqk5MD67RoiBVMMzPmI6Sak8MUm4Q4K8UMk3NqFzf3==/kisspng-euclidean-vector-resource-icon-flat-creative-education-5a70756b7c6700.8678432615173195315096.png" width="80%" height="auto" style="margin-right: 50px;">
            </div>
  </div>
</div>
  <!-- end of content area -->



	  <!-- animation on scroll -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
 
<!--  automatic scrolling -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
   
})
</script>

</body>

</html>