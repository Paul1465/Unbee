<?php
session_start();
include('../../config/database.php');



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta http-equiv="refresh" content="<?php  
   $reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ('1')");
   while ($donnees = $reponse->fetch_array()) { 
      
       echo '' . $donnees['temps'] . '';  
   }

   ?>
    ;url=http://localhost/Unbee-master/admin/content-insert/diaporama3-texte.php">
    <script src="../../dist/vendor/jquery/ajaxjquery-3.3.1.min.js"></script>
    <!-- Bootstrap --> 
    <link rel="stylesheet" href="../../dist/vendor/bootstrap/bootstrap.min.css">
    <script src="../../dist/vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Popper -->
    <script src="../../dist/vendor/popper/popper.min.js"></script>
    <!-- Fonteawesome -->
    <link rel="stylesheet" href="../../dist/vendor/fontawesome/fontawesome.min.css"> 
    <link rel="stylesheet" href="../../dist/css/banderole.css">
    <link rel="stylesheet" href="../../dist/css/diaporama.css">
    <title>Document</title>
</head>
<body>
<section>
    <div class="container-fluid">
        <div class="row bgColor1">
           <div class="offset-md-1 col-md-10 offset-md-1 ">
               
            <h1 class="defileParent defile text-right">
            <?php
            $reponse = $con->query('SELECT * FROM `tbl_banderole` LIMIT 1');
            while ($donnees = $reponse->fetch_array()) {  
               echo '<p style="font-size: 48px" class="modifTexte">' . $donnees['texte_banderole'] . '</p>';  
            }
            ?>
         </h1>
            </div>
        </div>
    </div>
</section>
<script src="../../dist/js/escapeDiaporama.js"></script>
</body>
</html>

