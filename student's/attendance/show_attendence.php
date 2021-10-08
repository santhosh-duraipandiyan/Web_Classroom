<?php

include("db.php");
include("header.php");

?>

<head>
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="show_attendence_style.php">
</head>

<h1><div class="well text-center" style="background: white; box-shadow: none; border:none; font-family: 'Cinzel Decorative', cursive;">ATTENDENCE ON <?php echo $_POST['date']; ?></div></h1>

<h2>

		<a href="index.php" style="float: right; background: white; color: black; border: 0px; font-size: 25px;" id="back"><i class="fas fa-arrow-left"></i></a>

	</h2>

<div class="panel" style="background: white; border:1px solid white; box-shadow: none; margin-top: 50px;">

	<div class="panel panel-heading" style="background: white; border:1px solid white; box-shadow: none;">
	
	

	<div class="panel panel-body" style="background: white; border:1px solid white; box-shadow: none;">
		
		<form action="index.php" method="post">

			<table class="table table-striped" style="border:1px solid lightgrey;">

				<tr style="height: 55px; font-size: 20px; background: lightgrey;">

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">SERIAL NUMBER</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px; padding-left: 25px;">STUDENT NAME</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">ROLL NUMBER</th>

				<th style="padding-top: 15px; padding-left: 50px;">ATTENDENCE STATUS</th>

			    </tr>

				<?php

				$result=mysqli_query($con,"select * from attendence_records where date='$_POST[date]'");

				$serialnumber=0;

				$counter=0;

				while ($row=mysqli_fetch_array($result)) {

					$serialnumber++;
					
				?>

				<tr>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $serialnumber; ?></td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $row['student_name']; ?>

				</td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $row['roll_number']; ?>
					
				</td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;">

					<input type="radio" name="attendence_status[<?php echo$counter; ?>]"  style="margin-left: 25px;"

					<?php

					if ($row['attendence_status']=="present") 
						echo "checked=checked";

					?>

					value="present">PRESENT

					<input type="radio" name="attendence_status[<?php echo$counter; ?>]"  value="absent" style="margin-left: 25px;"

					<?php

					if ($row['attendence_status']=="absent") 
						echo "checked=checked";

					?>

					>ABSENT

				</td>

			    </tr>

			    <?php

			    $counter++;

			    ?>

			    <?php } ?>
				
			</table>
			

		</form>

	</div>

    </div>

</div>