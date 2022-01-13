<?php
session_start();

include("connect.php");
include("functions.php");
$user_data=check_login($con);


$_SESSION;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
</head>
<body>
	<style>
body {
  background-image: url('record.jpeg');
</style>
	<a href = "logout.php">Logout</a>
	<h1><font color = "white">Acces permis. <a href = "home.php">Clic aici pentru a merge la pagina principala:</h1></font></a>
	Buna ziua, <?php echo $user_data['user_name'];?>




</body>
</html>