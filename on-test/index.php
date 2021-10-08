<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.php">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative|Staatliches" rel="stylesheet">
	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- animation on scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<?php 

	include_once 'connection.php';

    ?>

<meta charset="UTF-8">

<?php

error_reporting(E_ALL ^ E_NOTICE);  

	$sql = "SELECT * FROM test";
	$result = mysqli_query($conn,$sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			$datas[] = $row;
		}
	}

	$q1=array();
	$q2=array();
	$q3=array();
	$q4=array();
	$q5=array();
	

	echo "<br>";

	foreach ($datas[0] as $q1[]) {
        
        
	}
    foreach ($datas[1] as $q2[]) {
        
      
	}
	foreach ($datas[2] as $q3[]) {
        
       
	}
	foreach ($datas[3] as $q4[]) {
        
        
	}
	foreach ($datas[4] as $q5[]) {
        
        
	}

 ?>



<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [];
questions[0] = <?php echo json_encode($q1); ?>;

questions[1] = <?php echo json_encode($q2); ?>;

questions[2] = <?php echo json_encode($q3); ?>;

questions[3] = <?php echo json_encode($q4); ?>;

questions[4] = <?php echo json_encode($q5); ?>;
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
		pos = 0;
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
	question = questions[pos][1];
	chA = questions[pos][2];
	chB = questions[pos][3];
	chC = questions[pos][4];
	test.innerHTML = "<h3>"+question+"</h3>";

	test.innerHTML += "<br><div class='radio'><input type='radio' name='choices' value='a' id='radio-1'><label for='radio-1' class='radio-label'> "+chA+"</label></div><br>";

	test.innerHTML += "<div class='radio'><input type='radio' name='choices' value='b' id='radio-2'><label for='radio-2' class='radio-label'> "+chB+"</label></div><br>";

	test.innerHTML += "<div class='radio'><input type='radio' name='choices' value='c' id='radio-3'><label for='radio-3' class='radio-label'> "+chC+"</label></div>";

	test.innerHTML += "<a id='button' onclick='checkAnswer()'>Submit Answer</a>";

}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][5]){
		correct++;
	}
	pos++;
	renderQuestion();
}
window.addEventListener("load", renderQuestion, false);
</script>

</head>
  
<body>

	<div id="content">

		<div id="header">
		<center>

		<h1 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">ONLINE-TEST</h1>
		<div data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200"><a href="#testaera" class="scroll">(scroll down)</a><div>
		
		 </center>
		 	</div>

<div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300"><a id="back" href="#"><i class="fas fa-arrow-left"></i></a></div>
<div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100"><a id="back" onclick="history.go(0)" style="margin-right: 50px;"><i class="fas fa-redo"></i></a></div>

		<div id="testaera">

	     <h2 id="test_status" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200"></h2>

         <div id="test"data-aos="fade-down" data-aos-duration="1500" data-aos-delay="400"></div>

        </div>

        <p style="margin-left: 100px; margin-top: 25px;">NOTE:don't cheat try ur best..!</p>

    </div>

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