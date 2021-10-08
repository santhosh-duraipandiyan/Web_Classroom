<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{
	
	margin:0;
	padding:0;
	font-family: 'Raleway', sans-serif;
}

#back{
	
	float:right;
	margin-right:100px;
	font-size:20px;
}

#back i{
	
	text-decoration:none;
	color:rgba(0,0,0,0.5);
}

#back i:hover{
	
	text-shadow: 0px 3px 3px #777;
	-webkit-transition:text-shadow ease 0.3s;
}

body::-webkit-scrollbar {

    width: 5px;
}
 
body::-webkit-scrollbar-thumb {

   background:black; 
   border-radius: 20px;
}

body::-webkit-scrollbar-track {

   background: white;
   border-radius: 20px;
}