<?php
session_start();
ob_start();
include("connect.php");
include("functions.php");

if (isset($_POST['submit'])) {
	$secret = "6LcQPO8dAAAAALOlgWhsFKzTp0hImY35dEAzET3F";
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
   $data = file_get_contents($url);
	$row = json_decode($data, true);
  
  
  if ($row['success'] == "true") {
	  echo "<script>alert('Validare recaptcha reusita');</script>";
	} else {
	  echo "<script>alert('Validare recaptcha esuata');</script>";
	}
  }

if($_SERVER['REQUEST_METHOD']=="POST")
{
	//ceva a fost postat


	$user_name=mysqli_real_escape_string($con,$_POST['user_name']);

	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name))
	{
	     if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
	     { 
            // Google reCAPTCHA API secret key 
            $secretKey = '6LcQPO8dAAAAALOlgWhsFKzTp0hImY35dEAzET3F';
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){
		//save to database
		$user=random_num(20);
		$query="insert into users(user, user_name, password)values('$user', '$user_name','$password')";
		mysqli_query($con,$query);
		header("Location: login.php");
		exit;
		die;
            }
	     }
	}else
	{
		echo "Va rog introduceti informatii valide!";


	}
}


?>

<!DOCTYPE html>
<head>
	<title>Signup</title>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<style>
body {
  background-image: url('record.jpeg');
}
</style>
		<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		<form method = "post">
			<div style ="font-size:20px;margin:10px,color:white">Signup</div>     
			<input id="text" type="text" name="user_name">
			<input id="text" type = "password" name = "password">
			<input id="submit" type="submit" value="Submit">
			<a href="login.php">Login</a>
			<div class="g-recaptcha" data-sitekey="6LcQPO8dAAAAAH7kK3b4bKFNJnX4m1MjOGQVdZaH"></div>
		</form>
		</div>
	</body>
</html>
