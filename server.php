

<?php
// connect to the MySQL server
$db = new mysqli('localhost', 'root', 'pass', 'pizza_db1');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query with CREATE DATABASE
$sql = "CREATE DATABASE `pizza_db1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

// Performs the $sql query on the server to create the database
if ($db->query($sql) === TRUE) {
  echo 'Database "pizza_db1" successfully created';
}
else {
 echo 'Error: '. $db->error;
}

// $db->close();

$username = "";
$email = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
    $create = "CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `username` varchar(100) NOT NULL,
      `email` varchar(100) NOT NULL,
      `password` varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  
    mysqli_query($db, $create);
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homepage.html');
  }
} 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {  
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) >= 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: homepage.html');
        }
        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>