<?php

include ("header.php");
include ("db.php");
$flag = 0;

if (isset($_POST['submit']))

 {
	$result=mysqli_query($con,"insert into attendence(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");

	if ($result) {
		
		$flag=1;

	}
}

?>

<head><link rel="stylesheet" type="text/css" href="add_style.php"></head>

<h2><div class="well text-center" style="background: white; box-shadow: none; border:none; font-family: 'Cinzel Decorative', cursive;">ADD STUDENT</div></h2>

 <div class="panel" style="background: white; border:1px solid white; box-shadow: none; margin-top: 50px;">

 	<?php if($flag){ ?>

 	<div class="alert" style="color: green;">
 		
 		<strong>!success</strong> attendence data successfully inserted;
 	</div>

     <?php } ?>
 	
 	<div class="panel-heading" style="background: white; border:1px solid white; box-shadow: none;">

 		<h2>

 		  <a class="btn btn-success" href="add.php" style="background: white; color: black; box-shadow: none;">ADD STUDENT</a>

 		 <a href="index.php" style="float: right; background: white; color: black; border: 0px; font-size: 25px;" id="back"><i class="fas fa-arrow-left"></i></a>

 	    </h2>

 	</div>

 	<div class="panel-body">

 	<form action="add.php" method="post">

 	<div class="form-group">
 			
 		    <label for="name" style="font-size: 20px;">STUDENT NAME:</label><br>

 		    <input type="text" name="name" id="name" class="form-control" required placeholder="enter student's name..." style="width: 300px; margin-top: 25px;">

 	</div>

 	<div class="form-group">
 			
 			<label for="roll" style="font-size: 20px;">ROLL NO:</label><br>

 			<input type="text" name="roll" id="roll" class="form-control" required placeholder="enter the rollno..." style="width: 300px; margin-top: 25px;">
 		
 	</div>

 	<div class="form-group">

 			<input type="submit" name="submit" class="btn btn-primary" value="submit" required style="background: white; color: black; box-shadow: none; float: right;">

 	</div>

    </form>

   </div>

</div>