<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{

	text-align: center;
	margin: 0;
	padding: 0;
	border:0;
}

#header{
	
	width:100%;
	height:50px;
	background:transperent;
	position:fixed;
	z-index:100;
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: 'Raleway', sans-serif;
}

#header ul{

	list-style: none;
	margin: 0px auto;
}

#header ul li{

	display: inline-block;
	margin-right: 20px;
	margin-left: 10px;
}

#header ul li a{

	text-decoration: none;
	color: black;
    font-size: 20px;
    -webkit-transition: color 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#header ul li a:hover{

    color:orange;
}

#login{

    font-size: 30px;
    list-style: none;
    position: fixed;
    z-index: 900;
    margin-top: 250px;
}

#login li{

	font-size: 25px;

}

#login li a{
	
	color:rgba(0,0,0,0.6);
}

#login i:hover{

	text-shadow: 0px 3px 3px #777;
	-webkit-transition:text-shadow ease 0.3s;
}

#content{
	
	width:100%;
	height:auto;
	position:relative;
	background:white;
	margin:0px auto;
	padding-top:75px;
}

#innercontent1{
	
	height:550px;
	width:100%; 
    margin-top:-85px;
    padding-top:150px;
    background-image:url('https://i-h1.pinimg.com/474x/58/e8/0c/58e80c08550c07ee2f3e9107c54bee7c.jpg');
    background-repeat:no-repeat;
    background-height:700px;
    background-width:auto;
    background-position:center;
    background-attachment:fixed;
}

#wc-class{

	font-size:50px;
	margin-top:100px;
	font-family: 'Cinzel Decorative', cursive;
}

#wc-class strong{
	color:#999;
}

#learnmorelink-2{
	
	float:left;
	margin-left:55px;

}

#learnmorelink-2 a{
	
	font-size:19px;
	color:black;
	text-decoration:none;
	-webkit-transition: margin-left 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}


table {

	border-collapse: collapse;
	width: 70%;
	height: 500px;
	color: black;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	background:#f9f9f9;
}

th {

	background-color:#f9f9f9;
	padding-left:20px;
	color: black;
}

#innercontent2{
	
	height:600px;
	width:100%;
	padding-top:100px;
	background:#f9f9f9;
}

#innercontent3{

	height:500px;
	padding-top:200px;
	width:100%;
	background:#B8F1FF;
}

#innercontent3-1{
	
	height:500px;
	width:60%;
	float:left;
	font-family: 'Raleway', sans-serif;
}

#innercontent3-1 h1{
	
	text-align:right;
}

#innercontent3-1 p{
	
	margin-left:100px;
	margin-right:50px;
	font-size:25px;
	text-align:right;
}

#learnmorelink-1{
	
	float:right;
	margin-right:55px;
	-webkit-transition: margin-right 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#learnmorelink-1 a{
	
	font-size:19px;
	color:black;
	text-decoration:none;
	-webkit-transition: margin-right 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#innercontent3-1 a:hover{
	
	margin-right:-5px;
	
}

#innercontent3-2{
	
	height:500px;
	width:40%;
	float:right;
	background:transperent;
}

#innercontent4{

	height:500px;
	padding-top:200px;
	width:100%;
	background:#FFFEB8;
}

#innercontent4-1{
	
	height:500px;
	width:60%;
	float:right;
	font-family: 'Raleway', sans-serif;
}

#innercontent4-1 h1{
	
	text-align:left;
	margin-right:100px;
}

#innercontent4-1 p{
	
	margin-right:100px;
	margin-left:50px;
	font-size:25px;
	text-align:left;
}

#learnmorelink-4{
	
	float:left;
	margin-left:55px;
}

#learnmorelink-4 a{
	
	font-size:19px;
	color:black;
	text-decoration:none;
	-webkit-transition: margin-right 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#innercontent4-1 a:hover{
	
	margin-left:-5px;
	
}

#innercontent4-2{
	
	height:500px;
	width:40%;
	float:left;
	background:transperent;
}

#innercontent5{

	height:500px;
	padding-top:200px;
	width:100%;
	background:lightgreen ;
}

#innercontent5-1{
	
	height:500px;
	width:60%;
	float:left;
	font-family: 'Raleway', sans-serif;
}

#innercontent5-1 h1{
	
	text-align:right;
}

#innercontent5-1 p{
	
	margin-left:100px;
	margin-right:50px;
	font-size:25px;
	text-align:right;
}

#learnmorelink-5{
	
	float:right;
	margin-right:55px;
}

#learnmorelink-5 a{
	
	font-size:19px;
	color:black;
	text-decoration:none;
	-webkit-transition: margin-right 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#innercontent5-1 a:hover{
	
	margin-right:-5px;
	
}

#innercontent5-2{
	
	height:500px;
	width:40%;
	float:right;
	background:transperent;
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