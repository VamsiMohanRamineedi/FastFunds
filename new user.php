<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "final_project";

	$conn = new mysqli($servername, $username, $password,$dbname);
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
	SESSION_start();

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>Sign up!</title>
</head>
<body>
	<form class="form-horizontal" action="" method="POST">
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email ID:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" placeholder="Enter email ID" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="password" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Full name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="name" placeholder="Enter your full name here" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Street address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="address" placeholder="Enter your street address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="city" placeholder="Enter your City">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="state">State:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="state" placeholder="Enter your State">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="zipcode">Zipcode:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="zipcode" placeholder="Enter zipcode">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone_no">Phone number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="phone_no" placeholder="Enter phone number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="ccn">Credit Card number:</label>
    <div class="col-sm-10"> 
      <input type="number" pattern=".{0}|.{16}" class="form-control" id="ccn" placeholder="Enter your Credit Card number">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="submit">Submit</button>
    </div>
  </div>


  </form>
  <?php 
  		$email = $_POST['email'];
  		$username = $_POST['username'];
  		$password = $_POST['password'];
  		$name = $_POST['name'];
  		

  		if((!empty($_POST['address'])){
  			$address = $POST['address'];

  		}else{
  			$address = NULL;
  		}
  		
  		if((!empty($_POST['city'])){
  				$city = $POST['city'];
  		}else{
  				$city = NULL;
  		}

  		if((!empty($_POST['state'])){
  				$state = $POST['state'];
  		}else{
  				$state = NULL;
  		} 
  		if((!empty($_POST['zipcode'])){
  				$zipcode = $POST['zipcode'];
  		}else{
  				$zipcode = NULL;
  		}
  		if((!empty($_POST['phone_no'])){
  				$phone_no = $POST['phone_no'];
  		}else{
  				$phone_no = NULL;
  		}

  		$query = "INSERT into Users VALUES ('$username','$password','$name','$address','$city','$state','$zipcode','$phone_no','$email')";

  		mysqli_query($conn, $query);
  		

  		if(!empty($POST['ccn'])){

  			$ccn = $POST['ccn'];

  			$query="INSERT into CreditCard VLAUES ('$username', '$ccn')";

  			mysqli_query($conn, $query);

  		}

  		$_SESSION['username'] = $username;
  		header("Location: registration.php");


   ?>
</body>
</html>