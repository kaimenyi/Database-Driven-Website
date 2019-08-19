<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$staff_id = "";
$employee_no = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('127.0.0.1', 'root', '1334', 'ktubecok_ts');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $section = mysqli_real_escape_string($db, $_POST['section']);
  $unit = mysqli_real_escape_string($db, $_POST['unit']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $employee_no = mysqli_real_escape_string($db, $_POST['employee_no']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) { array_push($errors, "Full Name is required"); }
  if (empty($section)) { array_push($errors, "Section is required"); }
  if (empty($unit)) { array_push($errors, "Unit is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($employee_no)) { array_push($errors, "Employee Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match!");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_reg WHERE username='$username' OR employee_no='$employee_no' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['employee_no'] === $employee_no) {
      array_push($errors, "Employee Number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user_reg (full_name, employee_no, section, unit, username, email, password) 
  			  VALUES('$full_name', '$employee_no', '$section', '$unit', '$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
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
    $query = "SELECT * FROM user_reg WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


?>