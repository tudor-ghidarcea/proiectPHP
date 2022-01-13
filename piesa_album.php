<?php
session_start();
ob_start();

include("connect.php");
include("functions.php");
$user_data=check_login($con);


$_SESSION;



if($_SERVER['REQUEST_METHOD']=="POST")
{
    //ceva a fost postat
    
    $nume_piesa=mysqli_real_escape_string($con,$_POST['nume_piesa']);

    $nume_album=mysqli_real_escape_string($con,$_POST['nume_album']);
    
    $piesa = "select id_piesa from piesa where (nume_piesa = '$nume_piesa')";
    
   $id_piesa= mysqli_query($con,$piesa);
    $result1=mysqli_fetch_row($id_piesa);
    
    $album = "select id_album from album where (nume_album = '$nume_album')";
    
   $id_album= mysqli_query($con,$album);
    $result2=mysqli_fetch_row($id_album);

    if(!empty($nume_piesa)&&!empty($nume_album))
    {
        $query="insert into piesa_album(id_piesa, id_album)values( '$result1', '$result2')";
        mysqli_query($con,$query);
        header("Location: home.php");
        exit;
        die;
    
    
 
}     

};
  
  

?>     



<html>

<head>
    <title>Adauga un album</title>
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
        <table>
   <tr>
    <td>Titlul piesei:</td>
    <td><input type="text" name="nume_piesa" required></td>
   </tr>
   <tr>
    <td>Titlul albumului:</td>
    <td><input type="text" name="nume_album" required></td>
   </tr>
  
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
 </div>
 </body> 
 
</html> 
