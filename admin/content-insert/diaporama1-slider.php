<?php
session_start();

include('../../config/database.php');

header('Content-Type: image');


?>
<!DOCTYPE html>  
<html>  
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Unbee</title> 
   <!-- Jquery -->
   <meta http-equiv="refresh" content="<?php  
   $reponse = $con->query('SELECT * FROM `tbl_diaporama` ORDER BY id ASC LIMIT 1');
   while ($donnees = $reponse->fetch_array()) { 
      
       echo '' . $donnees['temps'] . '';  
   }

   ?>;url=http://localhost/Unbee-master/admin/content-insert/diaporama2-banderole.php">
   <script src="../../dist/vendor/jquery/ajaxjquery-3.3.1.min.js"></script>
    <!-- Bootstrap --> 
    <link rel="stylesheet" href="../../dist/vendor/bootstrap/bootstrap.min.css">
    <script src="../../dist/vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Popper -->
    <script src="../../dist/vendor/popper/popper.min.js"></script>
    <!-- Fonteawesome -->
    <link rel="stylesheet" href="../../dist/vendor/fontawesome/fontawesome.min.css"> 
    <!-- BxSlider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- Style -->
    <link rel="stylesheet" href="../../dist/css/diaporama.css">
    <link rel="stylesheet" href="../../dist/css/customImageSlider.css">

 </head>  
 <body>
 <section>
  <div class="container d-flex justify-content-center ">
     <div class="row">
        <div class=" col-md-12  mt-1 ">     
           <ul class="slider dimensions bxslider  bx-wrapper slider-area  ">

 <?php

$reponse = $con->query('SELECT * FROM `tbl_diaporama` LIMIT 3');
while ($donnees = $reponse->fetch_array()) { 
   
    echo   '<li class="bx-slide"><img src="' . $donnees['img'] . '"/></li>';  
}
?>
   
              </ul>
          </div>
      </div>
   </div>
</section>

  <script>
 
    $('.bxslider').bxSlider({ 
      auto: true,
      autoControls: false,
      stopAutoOnClick: true,
      pager: false,
      controls: false,
      speed: 500
    });
  </script>
  
  <script src="../../dist/js/escapeDiaporama.js"></script>
 </body>
 
 </html>