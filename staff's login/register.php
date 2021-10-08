<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.php">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
  <div class="overlay">
  <div class="header">
  	<h2>Register</h2>
  </div>
   <a href="../index.php" style="float: right; background:transparent; color: black; border: 0px; font-size: 25px; margin-right: 100px;" id="back"><i class="fas fa-arrow-left"></i></a>
	
  <form method="post" action="register.php" style="margin-top: -25px;">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="message">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <center>
    <?php include('errors.php'); ?>
  </center>
</div>
</body>
</html>