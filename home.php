<?php
session_start();

include("connect.php");
include("functions.php");
$user_data=check_login($con);


$_SESSION;

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="icon" href="pages/icon.jpg">
      <title >Proiect Ghidarcea Tudor</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="layout.css" rel="stylesheet" type="text/css" media="all">
   </head>
   <body  id="top">
       
       
      <div class="backdrop type1">
         <header id="header" class="clear">
            <div id="logo" class="fl_left">
               <h1 class="button" ><a href="home.php">Casa de discuri</a></h1>
              
            </div>
            
  
  
  
            <nav id="mainav" class="fl_right">
               <ul class="clear">
                 
                 
                 
               </ul>
            </nav>
         </header>
      </div>
      <div class="backdrop full_width">
         <div id="intro"> 
            <img src="" alt=""> 
         </div>
      </div>
      <div class="backdrop type2">
         <main id="container" class="clear" onclick = "changeColor()">
            <div class="clear">
               <div class="first">
                  
                  
                 
                    <h1 class="button" ><a href="piesa.php">Adauga o piesa!</a></h1>
                    
                    <h1 class="button"><a href="album.php">Adauga un album!</a></h1>
                    
                    <h1 class = "button"><a href = "piesa_album.php">Adauga o piesa la un album!</a></h1>
                    
                    <h1 class = "button"><a href = "output_piesa.php">Afiseaza toate piesele stocate!</a></h1>
                        <h1 class = "button"><a href = "piesa_pdf.php">Exporta piesele stocate ca PDF!</a></h1>
                    <h1 class = "button"><a href ="output_album.php">Afiseaza toate albumele stocate in baza de date!</a></h1>
                   <h1 class = "button"><a href = "album_pdf.php">Exporta albumele stocate ca PDF!</a></h1>
                  
                  
                  
                  
               </div>
              
            </div>
            <div class="clear"></div>
         </main>
      </div>
      <div class="backdrop type1">
         <footer id="footer" class="clear">
            <div>
               <p><span class="fa fa-envelope-o pushright"></span> </p>
            </div>
         </footer>
      </div>
      
    
  
   </body>
</html>