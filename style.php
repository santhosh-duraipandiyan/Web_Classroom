<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{

	text-align: center;
	margin: 0;
	padding: 0;
	border:0;
}

header{

	height: 50px;
	background: transperent;
	width: 100%;
	z-index: 100;
	position: fixed;
	top: -1px;
    padding-top: 20px;
    font-family: 'Raleway', sans-serif;
}

header ul{

	list-style: none;
	margin: 0px auto;
}

header ul li{

	display: inline-block;
	margin-right: 20px;
	margin-left: 10px;
}

header ul li a{

	text-decoration: none;
	color: #999;
    font-size: 20px;
    -webkit-transition: color 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

header ul li a:hover{

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
	
	color:#999;
}

#login i:hover{

	color:orange;
	-webkit-transition:color .7s;
	-webkit-timing-function:ease-in-out;
}

#content{

	width: 100%;
	position: relative;
	background: white;
	color: black;

}

#innercontent1{
	
	height:700px;
	width:100%; 
    margin: 0;
    padding: 0;
    z-index:-100;
    background:black;

}

#video-background {
  right: 0; 
  bottom: 0;
  width: 100%; 
  height: 700px;
}

#innercontent2{
	
	height:700px;
	width:100%;
	background:white;
	padding-top:100px;
	padding-bottom:0px;
		background-image:url(https://images.pexels.com/photos/6565/apple-desk-laptop-working.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpg);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment:fixed;

}

#innercontent2-1{
	
	height:700px;
	width:60%;
	float:right;
	font-family: 'Raleway', sans-serif;
}

#innercontent2-1 h1{
	
	text-align:left;
	margin-right:100px;
}

#innercontent2-1 p{
	
	margin-right:100px;
	margin-left:50px;
	font-size:25px;
	text-align:left;
}

#learnmorelink-2{
	
	float:left;
	margin-left:55px;
}

#learnmorelink-2 a{
	
	font-size:19px;
	color:black;
	text-decoration:none;
	-webkit-transition: margin-right 0.5s;
	-webkit-transition-timing-function: ease-in-out;
}

#innercontent2-1 a:hover{
	
	margin-left:-5px;
	
}

#innercontent2-2{
	
	height:700px;
	width:40%;
	float:left;
	background:transperent;
}

#innercontent3{
	
	height:700px;
	width:100%;
	background-image:url(https://images.pexels.com/photos/6565/apple-desk-laptop-working.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpg);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment:fixed;
}

#innercontent3-1{
	
	height:600px;
	padding-top:100px;
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
	
	height:700px;
	width:40%;
	float:right;
	background:transperent;
}

#innercontent4{
	
	height:600px;
	width:100%;
	padding-top:100px;
}

#social ul{
	
	list-type:none;
	
}

#social li{
	
	display:inline-block;
	margin-right:20px;
}

#social li i{
	
	-webkit-transition: color 0.5s;
	-webkit-transition-timing-color: ease-in-out;
	cursor:pointer;
	color:#999;
}

#social li i:hover{
	
	color:orange;
}

<!-- #innercontent5{
	
	height:700px;
	width:100%;
	border-bottom:2px solid black;
}

#innercontent6{
	
	height:700px;
	width:100%;
	border-bottom:2px solid black;
}

#innercontent7{
	
	height:700px;
	width:100%;
	border-bottom:2px solid black;
}
 -->

 .feedback button {

  font-size: 20px;
  background-color: white;
  width: auto;
  color: #3b4a67;
  cursor: pointer;
  box-shadow:none;
  border:none;
  align-self: flex-end;
  font-family: 'Raleway', sans-serif;
  -webkit-transition: color 0.5s;
  -webkit-transition-timing-color: ease-in-out;
}

.feedback button:hover{
	
	color:orange;
}

.feedback textarea,
input {

  border: 1px solid #ececec;
  background-image: none;
  background-color: #fff;
  box-shadow: none;
  font-size: 14px;
  padding: 16px;
  border-radius: 5px;
  box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.04);
  margin-bottom: 20px;
  width:250px;
  font-family: 'Raleway', sans-serif;
}

.feedback {
  
  position: relative;
  display: flex;
  align-items: center;
  max-width: 980px;
  justify-content: center;
  float: right;
  margin-right: 50px;
  height: 380px;
  width: 400px;
}

.feedback .feedback-form {

  display: flex;
  flex-direction: column;
  margin-top:-50px;
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