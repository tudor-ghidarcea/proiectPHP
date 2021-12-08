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
		//save to database
		$user=random_num(20);
		$query="insert into users(user, user_name, password)values('$user', '$user_name','$password')";
		mysqli_query($con,$query);
		header("Location: login.php");
		die;
	}else
	{
		echo "Va rog introduceti informatii valide!";


	}
}
?>

<!DOCTYPE html>
<head>
	<title>Signup</title>
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
			<input id="button" type="submit" value="Signup">
			<a href="login.php">Login</a>
		</form>