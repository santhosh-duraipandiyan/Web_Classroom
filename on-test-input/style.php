<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{
	
	margin:0;
	padding:0;
	font-family: 'Raleway', sans-serif;
	height:800px;
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

form{
	
	margin-top:50px;
}

#question{
	
	height:100px;
	width:500px;
	font-family: 'Raleway', sans-serif;
	color:#999;
	padding-left:10px;
	padding-top:10px;
	font-size:17px;
}

#q{
	
	float:left;
	margin-left:50px;
	margin-top:50px;
}

#choice-a{
	
	height:100px;
	width:500px;
	font-family: 'Raleway', sans-serif;
	color:#999;
	padding-left:10px;
	padding-top:10px;
	font-size:17px;
}

#c1{
	
	float:right;
    margin-right:50px;
	margin-top:50px;
}

#choice-b{
	
	height:100px;
	width:500px;
	font-family: 'Raleway', sans-serif;
	color:#999;
	padding-left:10px;
	padding-top:10px;
	font-size:17px;
}

#c2{
	
	float:right;
	margin-right:50px;
	margin-top:25px;
}

#choice-c{
	
	height:100px;
	width:500px;
	font-family: 'Raleway', sans-serif;
	color:#999;
	padding-left:10px;
	padding-top:10px;
	font-size:17px;
}

#c3{
	
	float:right;
	margin-right:50px;
	margin-top:25px;
}

#answer{
	
	height:50px;
	width:100px;
	font-family: 'Raleway', sans-serif;
	color:#999;
	padding-left:10px;
	padding-top:10px;
	font-size:17px;
	text-transform: uppercase;
}

#ans{
	
	float:left;
	margin-top:280px;
	margin-left:-510px;
}

#submit{
	
	float:right;
	margin-top:220px;
	margin-right:-400px;
	padding-left:10px;
	padding-right:10px;
	padding-top:5px;
	padding-bottom:5px;
	border:1px solid black;
	border-radius:2px;
	background:white;
	font-size:20px;
	font-family: 'Raleway', sans-serif;
	-webkit-transition: all 0.3s;
	-webkit-transition-timing-function: ease-in-out;
}

#submit:hover{
	
	background:black;
	color:white;
}

#submit2{
	
	float:right;
	margin-top:220px;
	margin-right:-300px;
	padding-left:10px;
	padding-right:10px;
	padding-top:5px;
	padding-bottom:5px;
	border:1px solid black;
	border-radius:2px;
	background:white;
	font-size:20px;
	font-family: 'Raleway', sans-serif;
	-webkit-transition: all 0.3s;
	-webkit-transition-timing-function: ease-in-out;
}

#submit2:hover{
	
	background:black;
	color:white;
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