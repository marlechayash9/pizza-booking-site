

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In!</title>
  <link rel="stylesheet" type="text/css" href="All.css">
</head>
<body>

	<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="signup">
    <img class="w3-image w3-opacity-min " src="bg_3.jpg " alt="Pizza Catering" width="1850" height="1000">
    <div class="w3-display-topmiddle w3-padding-large ">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
		</div>
		<br>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	  <br>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <br>
  	<p><b>
  		Not yet a member? <a href="signup.php">Sign up</a></b>
  	</p>
	</form>
</div>
</header>
</body>
</html>
