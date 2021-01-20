<?php 
session_start();

ini_set('display_errors','off');
include('varToDelete.php');


?>
<?php
include('../../../inc/navBarResponsive.php');
include('../../../inc/sideBar2.php');
include('../../../inc/header3.php');
?>

        <h1 class="mt-5 mb-5">Supprimer les fichiers créer</h1>
        
<?php

if (!is_dir($filename)){
  echo $formulaire;
  
}else{
  echo"Aucun fichier à supprimer";
}

    if(isset($_POST['delete']))
    {
        unlink($filename);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }

if (!is_dir($filename1)){
  echo $formulaire1;
  
}

    if(isset($_POST['delete1']))
    {
        unlink($filename1);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }
if (!is_dir($filename2)){
  echo $formulaire2;
 
}

    if(isset($_POST['delete2']))
    {
        unlink($filename2);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }
if (!is_dir($filename3)){
  echo $formulaire3;
  
}

    if(isset($_POST['delete3']))
    {
        unlink($filename3);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }
if (!is_dir($filename4)){
  echo $formulaire4;
  
}

    if(isset($_POST['delete4']))
    {
        unlink($filename4);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }
if (!is_dir($filename5)){
  echo $formulaire5;
  
}

    if(isset($_POST['delete5']))
    {
        unlink($filename5);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }
if (!is_dir($filename6)){
  echo $formulaire6;
  
}

    if(isset($_POST['delete6']))
    {
        unlink($filename6);
        ?><script>
        setTimeout("location.href = 'confirmDelete.php';"); </script><?php
        
    }


?>

	</body>
	<script src="../../../dist/js/sideBar.js"></script>
 </html>