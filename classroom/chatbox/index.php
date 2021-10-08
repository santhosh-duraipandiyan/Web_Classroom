<?php

?>

<html>
<head>
	<title>chatbox</title>
	<!-- stylesheet link -->
	<link rel="stylesheet" type="text/css" href="style.php/">
	<!-- j-query link -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
	<!-- animation on scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<script>
		
		// submit function
		function submitChat() {
			
			if (form1.uname.value == '' || form1.msg.value == '') {

				alert('ALL FIELDS ARE MANDATORY ...!');
				return;

			}

			form1.uname.readOnly = true;
			form1.uname.style.border = 'none';

			var uname = form1.uname.value;
			var msg = form1.msg.value;
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function(){

				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

					document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;

				}

			}

			xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
			xmlhttp.send();

		}

		// automatic loading function

		$(document).ready(function(e){
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');},1000);
		});

	</script>

</head>
<body>
	<div id="container">
	<div id="header"><center><h1>-ASKBOX-</h1></center></div>
	<div id="content">
		<div id="overlay">
		<a id="back" href="../"><i class="fas fa-arrow-left"></i></a>
		<iframe src="chatlogs.php" height="400px" width="100%;"></iframe>
		<br>
		<br>
		<br>
		<br>
	<form name="form1">
		NAME:
		<input type="text" name="uname" style="width: 200px; height: 50px;" placeholder="enter your name here...">
		Your message:
		<input type="text" name="msg" style="width: 700px; height: 50px; font-family: 'Raleway', sans-serif; font-size: 15px; border:1px solid black; border-radius:2px; background:transparent;" placeholder="enter your question's...">
		<a href="#" onclick="submitChat()">SEND</a>
	</form>
	<br>
    <!-- content display -->

	<!-- <div id="chatlogs">
	
		LOADING CHATLOGS PLEASE WAIT...

	</div> -->

</div>

</div>

	</div>

	     <!-- animation on scroll -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
</body>
</html>