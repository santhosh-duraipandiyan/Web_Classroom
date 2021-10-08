<?php

include("db.php");
include("header.php");

?>

<head><!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="view_all_style.php"></head>

<h2><div class="well text-center" style="background: white; box-shadow: none; border:none; font-family: 'Cinzel Decorative', cursive;">VIEW ATTENDENCE</div></h2>

	<h2>

		<a href="index.php" style="float: right; background: white; color: black; border: 0px; font-size: 25px;" id="back"><i class="fas fa-arrow-left"></i></a>

	</h2>

<div class="panel"  style="background: white; border:1px solid white; box-shadow: none; margin-top: 50px;">

	<div class="panel panel-heading" style="background: white; border:1px solid white; box-shadow: none;">

	<div class="panel panel-body" style="background: white; border:1px solid white; box-shadow: none;">
		
		

			<table class="table table-striped" style="border:1px solid lightgrey;">

				<tr style="height: 55px; font-size: 20px; background: lightgrey;">

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">SERIAL NUMBER</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">DATES</th>

				<th style="padding-top: 15px; border-right: 1px solid lightgrey; padding-left: 25px;">SHOW ATTENDENCE</th>

			    </tr>

				<?php

				$result=mysqli_query($con,"select distinct date from attendence_records");

				$serialnumber=0;

				while ($row=mysqli_fetch_array($result)) {

					$serialnumber++;
					
				?>

				<tr>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $serialnumber; ?></td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;"><?php echo $row['date']; ?>

				</td>

				<td style="border-right: 1px solid lightgrey; padding-left: 25px;">

					<form action="show_attendence.php" method="POST">

						<input type="hidden" value="<?php echo $row['date']; ?>" name="date">

						<input type="submit" class="btn" value="show attendence">
						
					</form>
					
				</td>

			    </tr>

			    <?php } ?>
				
			</table>

		</form>

	</div>

    </div>

</div>
