<?php

include("db.php");
include("header.php");

$flag=0;

$update=0;

if (isset($_POST['submit'])) {

	$date = date("y-m-d");

	$records=mysqli_query($con,"select * from attendence_records where date='$date'");

	// $num=mysqli_num_rows($records);

	// if($num){

	// 		foreach ($_POST['attendence_status'] as $id => $attendence_status) {

	// 	$student_name = $_POST['student_name'] [$id];

	// 	$roll_number = $_POST['roll_number'] [$id];


	// 	$result=mysqli_query($con,"update attendence_records set student_name='$student_name',roll_number='$roll_number',attendence_status='$attendence_status',date='$date'

	// 		where date='$date';

	// 		");

	// 	if ($result) {

	// 		$update=1;

	// 	}

	// }

	// } else {

	foreach ($_POST['attendence_status'] as $id => $attendence_status) {

		$student_name = $_POST['student_name'] [$id];

		$roll_number = $_POST['roll_number'] [$id];


		$result=mysqli_query($con,"insert into attendence_records (student_name,roll_number,attendence_status,date) values ('$student_name','$roll_number','$attendence_status','$date')");

		if ($result) {

			$flag=1;

		}

	}

}

// }

?>

<head><link rel="stylesheet" type="text/css" href="style.php"></head>

<h2><div class="well text-center" style="background: white; box-shadow: none; border:none; font-family: 'Cinzel Decorative', cursive;">STUDENT ATTENDENCE</div></h2>


<div class="panel" style="background: white; border:1px solid white; box-shadow: none; margin-top: 50px;">

	<div class="panel panel-heading" style="background: white; border:1px solid white; box-shadow: none;">
	
	<h2>
		
		<a href="add.php" class="btn btn-success" style="background: white; color: black; box-shadow: none;" id="addbutton">ADD STUDENT</a>

		<a href="view_all.php" class="btn btn-info pull-right" style="background: white; color: black; box-shadow: none;">VIEW ALL</a>

	</h2>

	<?php if($flag){?>

	<div class="alert" style="color: green;">ATTENDENCE DATA INSERTED SUCCESSFULLY..! </div>

    <?php } ?>

    <!-- <?php if($update){?>

	<div class="alert">
	STUDENT ATTENDENCE UPDATED SUCCESSFULLY..! </div>

    <?php } ?> -->

	<h4>

	<div class="well" style="background: white; box-shadow: none; border:none; font-family: 'Raleway', sans-serif;">

		<span style="font-size: 25px;">DATE:</span>
		
		<?php

		echo date("y-m-d");

		?>

	</div>

    </h4>

	<div class="panel panel-body" style="background: white; border:1px solid white; box-shadow: none;">
		
		<form action="index.php" method="post">

			<table class="table table-striped" style="border:1px solid lightgrey;">

				<tr style="height: 55px; font-size: 20px; background: lightgrey;">

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">SERIAL NUMBER</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">STUDENT NAME</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">ROLL NUMBER</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">ATTENDENCE STATUS</th>

			    </tr>

				<?php

				$result=mysqli_query($con,"select * from attendence");

				$serialnumber=0;

				$counter=0;

				while ($row=mysqli_fetch_array($result)) {

					$serialnumber++;
					
				?>

				<tr>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $serialnumber; ?></td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $row['student_name']; ?>
					
				<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">

				</td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $row['roll_number']; ?>
					
					<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">

				</td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;">

					<input type="radio" name="attendence_status[<?php echo$counter; ?>]" value="present" style="margin-left: 25px;">PRESENT

					<input type="radio" name="attendence_status[<?php echo$counter; ?>]" value="absent" style="margin-left: 25px;">ABSENT

				</td>

			    </tr>

			    <?php

			    $counter++;

			    ?>

			    <?php } ?>
				
			</table>

			<input type="submit" name="submit" value="submit" class="btn btn-primary" style="background: white; color: black; box-shadow: none; float: right;">
			

		</form>

	</div>

    </div>

</div>