<html>
<head>
	<title>logs</title>
	<!-- j-query link -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>
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

			// xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
			// xmlhttp.send();

		}

		// automatic loading function

		$(document).ready(function(e){
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');},1000);
		});

	</script>
</head>
<body>
<!-- content display -->

	<div id="chatlogs">
	
		LOADING CHATLOGS PLEASE WAIT...

	</div>
</body>
</html>