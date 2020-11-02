<?php
session_start();

$username = "";
$email    = "";
$errors = array();


// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'inventory');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


// register user
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $first_name=mysqli_real_escape_string($con, $_POST['first_name']);
    $ast_name=mysqli_real_escape_string($con, $_POST['last_name']);
    $username = mysqli_real_escape_string($con, $_POST['user']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);


//vaidate user registration
if (empty($first_name)) { array_push($errors, "First name is required"); }
if (empty($last_name)) { array_push($errors, "Last name is required"); }
if (empty($username)) { array_push($errors, "User name is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
}


 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $userame) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }



// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
  
    $query = "INSERT INTO register (username,email,password_1,first_name,last_name) 
                  VALUES('$username', '$email', '$password','$first_name','$last_name')";
    mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    $_SESSION['first_name'] =$first_name;
    $_SESSION['last_name'] =$last_name;
    header('location: login.php');
    }
  }



  // LOGIN USER
if(isset($_POST['login']))
{
  
  //mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
  
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) 
    {
      $password = md5($password);
      if (md5($_POST['password']) !== $password)
{
    echo "Password is invalid";
}
      $query = "SELECT * FROM register WHERE username='$username' AND password_1 ='$password'";
		
		
		
		
		$sql="SELECT first_name,last_name FROM register WHERE username='$username' AND password_1 ='$password'";
		$result=mysqli_query($con,$sql);  
		$row=mysqli_fetch_assoc($result);
	 
	 
	 
      $results = mysqli_query($con, $query);
      $res=mysqli_num_rows($results);
      if ($res) 
      {
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] =$row["first_name"];
		
		$_SESSION['last_name'] =$row["last_name"];
        header('location: index.php');
      }
      else 
      {
        array_push($errors, "Wrong username/password combination");
      }
    }

  }
  




?>
