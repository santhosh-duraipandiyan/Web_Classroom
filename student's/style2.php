<?php
 header('content-type: text/css; charset:UTF-8');
?>

body {
  font-size: 120%;
  height:600px;
  margin: 0px;
  padding: 0px;
  background:#f9f9f9;
  background-image: url("http://bsnscb.com/data/out/119/39186600-low-poly-wallpapers.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}
.overlay{
  height:100%;
  width:100%;
  <!-- background:rgba(0,0,0,0.2); -->
  padding:0px;
  margin:0px;
}
.header {
  width: 33.2%;
  z-index:1000;
  margin: 50px auto 0px;
  background:#f9f9f9;
  color: black;
  text-align: center;
  padding: 30px;
  font-family: 'Cinzel Decorative', cursive;
  border-radius:5px 5px 0 0;
}
form{
  background:#f9f9f9;
  border-radius:0 0 5px 5px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 50px;
  background: transperent;
  font-family: 'Raleway', sans-serif;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #999;
  margin-bottom:7px;
  color:#999;
  background:#f9f9f9;
  letter-spacing:1px;
}
.btn {
  padding: 10px;
  font-size: 17px;
  color: lightgreen;
  background: #72CC5E;
  border:1px solid #72CC5E;
  border-radius: 2px ;
  cursor: pointer;
  font-weight:bold;
  margin-top:20px;
  float:right;
  -webkit-transition: all 0.3s;
  -webkit-transition-timing-function: ease-in-out;
}
.btn:hover{
  box-shadow:3px 3px 5px 0 #555;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
#back i{
  
  text-decoration:none;
  color:rgba(0,0,0,0.5);
  background:transperent;
}

#back i:hover{
  
  text-shadow: 0px 3px 3px #777;
  -webkit-transition:text-shadow ease 0.3s;
}
.message a{
  text-decoration:none;
  color:#72CC5E;
}