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

    $durata_piesa=mysqli_real_escape_string($con,$_POST['durata_piesa']);
    
    $gen=mysqli_real_escape_string($con,$_POST['gen']);
    
    $artisti=mysqli_real_escape_string($con,$_POST['artisti']);
    
    if(!empty($nume_piesa)&&!empty($durata_piesa)&&!empty($gen)&&!empty($artisti))
    {
        $query="insert into piesa(id_piesa, nume_piesa, durata_piesa, gen_piesa, artisti)values(NULL, '$nume_piesa', '$durata_piesa','$gen', '$artisti')";
        mysqli_query($con,$query);
        header("Location: home.php");
        exit;
        die;
    
    
 
}     

};
  
  

?>     



<html>

<head>
    <title>Adauga o piesa</title>
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
    <td>Durata piesei:</td>
    <td><input type="text" name="durata_piesa" required></td>
   </tr>
   <tr>
    <td>Gen muzical: </td>
    <td><input type="text" name="gen" required></td>
    </td>
    </tr>
    <tr></tr>
     <td>Artisti: </td>
    <td><input type="text" name="artisti" required></td>
   </tr>
  
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
 </div>
 </body> 
 
</html> 
