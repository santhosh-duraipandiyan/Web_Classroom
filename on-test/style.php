<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{
	
	margin:0px;
	padding:0px;
	background-image:url(https://images.unsplash.com/photo-1536875489903-655d152ed785?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1055&q=80.jpg);
	background-position:center;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
}

#content{
	
	width: 100%;
	position: relative;
	background: transperent;
	color: black;
	font-family: 'Raleway', sans-serif;
	overflow:hidden;
	margin-top:300px;
	background:rgba(255,255,255,0.7);
	padding-bottom:25px;
	padding-top:100px;
}

#header a{
	
	text-decoration: none;
	color: black;
	font-size: 15px; 
	font-family: 'Raleway', sans-serif;
	-webkit-transition: all 0.3s;
	-webkit-transition-timing-function: ease-in-out;

}

#header a:hover{
	
	font-size:17px;
} 

#header{
	
	height: 200px;
	width:100%;
	background:transperent;
	color:rgba(0,0,0,0.7);
	font-family: 'Cinzel Decorative', cursive;
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

#test_status{
	
	border:1px solid black;
	border-radius:2px;
	padding:15px 10px 15px 15px;
	overflow:hidden;
}

#testaera{
	
	overflow:hidden;
	margin-top:50px;
    margin-right:100px;
	margin-left:100px;
}

div#test{ 

   <!--  border:1px solid black; -->
    border-radius:2px;
    padding:30px 50px 90px 50px;
    font-size:20px;

}

.radio {

  margin: 0.5rem;
}

.radio input[type="radio"] {

  position: absolute;
  opacity: 0;
}

.radio input[type="radio"] + .radio-label:before {

  content: '';
  background: transperent;
  border-radius: 100%;
  border: 2px solid black;
  display: inline-block;
  width: 15px;
  height: 15px;
  position: relative;
  margin-right: 1em;
  cursor: pointer;
  transition: all 250ms ease;
}

.radio input[type="radio"]:checked + .radio-label:before {

  background-color: #3197EE;
  box-shadow: inset 0 0 0 4px rgba(255,255,255,0.7);
}

.radio input[type="radio"]:focus + .radio-label:before {

  outline: none;
  border-color: #3197EE;
}

.radio input[type="radio"]:disabled + .radio-label:before {

  box-shadow: inset 0 0 0 4px rgba(255,255,255,0.7);
  border-color: #b4b4b4;
  background: #b4b4b4;
}

.radio input[type="radio"] + .radio-label:empty:before {

  margin-right: 0;
}

#button{
	
	padding:10px;
	float:right;
	font-size:15px;
	border:1px solid black;
	border-radius:2px;
	background:transperent;
	cursor:pointer;
	font-family: 'Raleway', sans-serif;
	-webkit-transition: all 0.3s;
	-webkit-transition-timing-function: ease-in-out;
}

#button:hover{
	
	color:white;
	background:rgba(0,0,0,0.7);
	border:1px solid rgba(0,0,0,0.7);
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
