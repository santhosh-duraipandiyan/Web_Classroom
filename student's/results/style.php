<?php
 header('content-type: text/css; charset:UTF-8');
?>

body{

	text-align: center;
	margin: 0;
	padding: 0;
	border:0;
}

table {

	width: 90%;
	height: auto;
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
	height:100px;
	border:none;
}
tr{
	height:100px;
}
tr:nth-child(even) {background-color: #f2f2f2}
td{
	border: none;
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