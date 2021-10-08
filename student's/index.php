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
	<title>classRep</title>

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
 				<li><a href="#innercontent2" class="scroll">Attendance</a></li><font size="5">|</font>
        <li><a href="#innercontent3" class="scroll">Results</a></li><font size="5">|</font>
 				<li><!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?></li>
 			</ul>
		
	</div>

	<ul id="login">
    		<li><a href="results"><i class="fas fa-pen-nib" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"></i></a></li><br>
    		<li><a href="attendance"><i class="fas fa-book" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400"></i></a></li><br>
    	</ul>

	<div id="content">
     <div id="innercontent1">
		<p id="wc-class">Welcome student<br><strong><?php echo $_SESSION['username']; ?></strong></p>
     </div>

<div id="innercontent2">
    <div id="innercontent2-1">

                <h1 data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">VIEW ATTENDENCE</h1>

                <p data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200" style="font-size: 22px;">Attendance is the concept of people, individually or as a group, appearing at a location for a previously scheduled event. Measuring attendance is a significant concern for many organizations, which can use such information to gauge the effective ness of their efforts and to plan for future efforts. <span  style="color: orange;">LETS GET STARTED</span></p>

                <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300" id="learnmorelink-2"><a href="attendance">Get started &#187;</a></div>

            </div>

            <div id="innercontent2-2">
              <img src="http://pngimg.com/uploads/student/student_PNG62552.png" width="80%" height="auto" style="margin-left: 50px;">
            </div>
  </div>
  <div id="innercontent3">
    <div id="innercontent3-1">

                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">RESULTS</h1>

                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">A result (also called upshot) is the final consequence of a sequence of actions or events expressed qualitatively or quantitatively. Possible results include advantage, disadvantage, gain, injury, loss, value and victory. There may be a range of possible outcomes associated with an event depending on the point of view, historical distance or relevance. Reaching no result can mean that actions are inefficient, ineffective, meaningless or flawed. <span  style="color: orange;">LETS GET STARTED</span></p>

                <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300" id="learnmorelink-1"><a href="results">Get started &#187;</a></div>

            </div>

            <div id="innercontent3-2">
              <img src="http://pngimg.com/uploads/notebook/notebook_PNG19206.png" width="80%" height="auto" style="margin-right: 50px;">
            </div>

  </div>

	</div><!-- end of content area -->



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