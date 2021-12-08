<?php


$dbhost = "localhost";
$dbuser = "id17950174_root";
$dbpass = "I+x0b+[oo5Yh+]fD";
$dbname = "id17950174_login";

if(!$con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname))
	{
		die("failed to connect");
	}
