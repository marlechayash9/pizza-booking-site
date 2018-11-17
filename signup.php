

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up!</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="All.css">

</head>
<body>
<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <a href="homepage.html" class="w3-bar-item"><img src="pizza.jpg" width="20px" height="20px"></a>
    
      <a href="homepage.html" class="w3-bar-item w3-button">Pizza booking site</a>
      <!-- Right-sided navbar links. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="menu.html" class="w3-bar-item w3-button">Menu</a>
        <a href="signup.php" class="w3-bar-item w3-button">Sign up</a>
        <a href="cart.html" class="w3-bar-item w3-button">Cart</a>
      </div>
	</div>
	
	<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="signup">
    <img class="w3-image w3-opacity-max " src="bg_3.jpg " alt="Pizza Catering" width="1850" height="1000">
    <div class="w3-display-topmiddle w3-padding-large ">
  <div class="header">
  	<h2>Sign up</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label><h4>Username</h4></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label><h4>Email</h4></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label><h4>Password</h4></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label><h4>Confirm password</h4></label>
		<input type="password" name="password_2">
	  </div>
	  <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><h4>Register</h4></button>
  	</div>
  	<p>
		<h4>
  		Already a member? </h4><a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</header>
</body>
</html>