<?php
session_start();
include("connect.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	//ceva a fost postat
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name))
	{
		//read from database
	
		$query="select * from users where user_name='$user_name' limit 1";
		$result=mysqli_query($con,$query);
		if($result)
		{
			if($result&&mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				
				if($user_data['password']===$password)
			{
		
		      $_SESSION['user']=$user_data['user'];
		       header("Location: index.php");
		       die;
	       }
        }
 }
echo '<span style="color:#AFA;text-align:center;">wrong username or password</span>';

	}else
	{
		echo '<span style="color:#AFA;text-align:center;">wrong username or password</span>';

	}
}

?>

<!DOCTYPE html>
<head>
	<title>Login</title>
</head>
<body>
	<style>
body {
  background-image: url('record.jpeg');
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
			<div style ="font-size:20px;margin:10px,color:white">Login</div>     
			<input id="text" type="text" name="user_name">
			<input id="text" type = "password" name = "password">
			<input id="button" type="submit" value="Login">
			<a href="signup.php">Signup</a>
		</form>