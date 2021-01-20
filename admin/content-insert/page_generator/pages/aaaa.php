<?php
session_start();
include('../../../../config/database.php');


//define("chemin", 'xampp\htdocs\Unbee-master\admin\');

?>

<?php
$dir    = 'C:/xampp/htdocs/';
$dir1 = 'Unbee-master/admin/content-insert/page_generator/pages/';
$dir2 = 'url=http://localhost/';
$dir3 = 'Unbee-master/admin/content-insert/diaporama1-slider.php';

$files1 = scandir($dir . $dir1);
$firstFile = $dir . $dir1 . $files1[3];// because [0] = "." [1] = ".." 
$idDiaporama = '1' ;
$idDiaporama2 = '' ;
 




?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="refresh" content="
    <?php  
   $reponse = $con->query('SELECT * FROM `tbl_article` ORDER BY id ASC LIMIT 1');
   
   while ($donnees = $reponse->fetch_array()) { 
      
   
    echo '' . $donnees['temps'] . '';  

   }

   ?>; <?php

   if (file_exists($firstFile)) {

   
    
    echo "$dir2$dir1$files1[4]";
    
} else {

    echo "";

     } 
?>

">

    <script src="../../../../dist/vendor/jquery/ajaxjquery-3.3.1.min.js"></script>
    <!-- Bootstrap --> 
    <link rel="stylesheet" href="../../../../dist/vendor/bootstrap/bootstrap.min.css">
    <script src="../../../../dist/vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Popper -->
    <script src="../../../../dist/vendor/popper/popper.min.js"></script>
    <!-- Fonteawesome -->
    <link rel="stylesheet" href="../../../../dist/vendor/fontawesome/fontawesome.min.css"> 
    <link rel="stylesheet" href="../../../../dist/css/animate.css">
    <link rel="stylesheet" href="../../../../dist/css/diapoTexte.css">
    <title>1</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10 offset-md-1 mt-5 justify-content-center ajustementPerso ">
                
                <?php
$reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ('$idDiaporama')");
while ($donnees = $reponse->fetch_array()) {
    echo '<div class= ' . $donnees ['effect'] . ' style= font-size:'. $donnees['taille'] .  '>';
    echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
    echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>';
    
    echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';
    
}
?>
<script>
$("div").addClass("animated");
</script>
                

        </div>
    </div>
</div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10 offset-md-1 mt-5 justify-content-center ajustementPerso">
                <?php
$reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ('$idDiaporama2')");
while ($donnees = $reponse->fetch_array()) {
    echo '<div class= ' . $donnees ['effect'] . ' style= font-size:'. $donnees['taille'] .  '>';
    echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
    echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>';
    
    echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';
    
}
?>
<script>
$("div").addClass("animated");
</script>
                

                </div>
            </div>
</div>
            
    </section>
    <script src="../../../../dist/js/escapeDiaporama.js"></script>
</body>
</html>