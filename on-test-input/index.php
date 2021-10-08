<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>question input</title>
	<link rel="stylesheet" type="text/css" href="style.php">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- j-query link -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>	
		
			<script>
		
		// submit function
		function submitform() {
			
			if (form1.question.value == '' || form1.answer.value == '' || form1.choice1.value == '' || form1.choice2.value == '' || form1.choice3.value == '') {

				alert('ALL FIELDS ARE MANDATORY ...!');
				return;

			}

			// form1.uname.readOnly = true;
			// form1.uname.style.border = 'none';

			var question = form1.question.value;
			var answer = form1.answer.value;
			var choice1 = form1.choice1.value;
			var choice2 = form1.choice2.value;
			var choice3 = form1.choice3.value;
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function(){

				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

					document.getElementById('sample').innerHTML=xmlhttp.responseText;

				}

			}

			xmlhttp.open('GET','input.php?question='+question+'&answer='+answer+'&choice1='+choice1+'&choice2='+choice2+'&choice3='+choice3,true);
			xmlhttp.send();

		}

		// automatic loading function

		$(document).ready(function(e){
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#sample').load('autoload.php');},1000);
		});

	</script>

	<script type="text/javascript">
		function clearTable(){

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){

				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

					// document.getElementById('sample').innerHTML=xmlhttp.responseText;

				}

			}
			xmlhttp.open('GET','clear.php',true);
			xmlhttp.send();

		// 	$(document).ready(function(e){
		// 	$.ajaxSetup({cache:false});
		// 	setInterval(function() {$('#sample').load('clear.php');},1000);
		// });
		}

	</script>

</head>

<body>

	<center><h2 style="font-family: 'Cinzel Decorative', cursive;">get the questions</h2></center>

	<a id="back" href="#"><i class="fas fa-arrow-left"></i></a>

	<form name="form1">
        <div id="q">
		 ENTER THE QUESTION:<br><br>
		 <textarea name="question" id="question"></textarea><br>
	    </div>
        <div id="ans">
		 ENTER THE CORRECT ANSWER (A or B or C):<br><br>
		 <textarea name="answer" id="answer"></textarea><br><br>
		</div> 
		  <div id="c1">
		 ENTER CHOICE-A:<br><br>
		 <textarea name="choice1" id="choice-a"></textarea><br>
	    </div>
	    <div id="c2">
		 ENTER CHOICE-B:<br><br>
		 <textarea name="choice2" id="choice-b"></textarea><br>
	    </div>
	    <div id="c3">
		 ENTER CHOICE-C:<br><br>
		 <textarea name="choice3" id="choice-c"></textarea><br>
        </div>

		<input type="submit" value="upload" id="submit" onclick="submitform()">

		<input type="submit" value="delete all" id="submit2" onclick="clearTable()">

		<p style="float: left; margin-left: -300px;
		margin-top: 100px;"><b>NOTE:</b> please enter 5 questions</p>

		<p style="float: left; margin-left: -300px;
		margin-top: 150px;"><b>CONNECTION STATUS:</b></p>

		<div id="sample" style="float: left; margin-left: -100PX;
		margin-top: 150px;">LOADING...</div>
		
			</form>

	
</body>
</html>