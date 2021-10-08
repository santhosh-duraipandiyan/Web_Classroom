<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{
	
	padding:0;
	margin:0;
}

#header{
	
	height: 75px;
	width:100%;
	background:transperent;
	padding-top:5px;
	z-index: 100;
	position: fixed;
	font-family: 'Cinzel Decorative', cursive;
	color:rgba(0,0,0,0.5);
}

#content{
	
	width: 100%;
	position: relative;
	background: white;
	color: black;
	font-family: 'Raleway', sans-serif;
}

#overlay{
	
	width:100%;
}

#back{
	
	float:right;
	margin-right:100px;
	font-size:30px;
	margin-top:100px;
}

#back i{
	
	text-decoration:none;
	color:rgba(0,0,0,0.5);
}

#back i:hover{
	
	text-shadow: 0px 3px 3px #777;
	-webkit-transition:text-shadow ease 0.3s;
}

iframe{
	border:none;
}

form{
	
	margin-left:25px;
}

form a{
	
	text-decoration:none;
	color:black;
	background:green;
	padding-top:7px;
	padding-bottom:7px;
	padding-left:10px;
	padding-right:10px;
	border:1px solid black;
	border-radius:2px;
    -webkit-transition: all 0.5s;
	-webkit-transition-timing-color: ease-in-out;
}

form a:hover{

	background:darkgreen;
}

input{
	
	padding-left:10px;
	font-family: 'Raleway', sans-serif;
	font-size:15px;
	border:1px solid black;
	border-radius:2px;
	background:transparent;
}

#chatlogs{
	
	width:80%;
	border-top:1px solid black;
	padding-top:50px;
	padding-bottom:50px;
	margin-left:100px;
	cursor:pointer;
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