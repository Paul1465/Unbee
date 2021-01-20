<?php
include('../../config/database.php');
include('../../inc/header2.php');
?>

</head>  

<body>

<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');


$requete = "INSERT INTO tbl_article (Titre, date, contenu) VALUES ('".htmlentities(addslashes($_POST['titre']), 
ENT_QUOTES)."','".date("Y-m-d")."','".htmlentities (addslashes($_POST['contenu']), ENT_QUOTES)."')"; 
$resultat = mysqli_query($con,$requete); 
$identifiant = mysqli_insert_id($con); 
/* Fermeture de la connexion */ 
mysqli_close($con); 
 
if ($identifiant != 0) { 
   echo "<br />L ajout de l article réussi.<br /><br />"; 
} 
else { 
   echo "<br />L article n a pas pu être ajouté.<br /><br />"; 
} 
?>
<a class="text-primary" href="editionTexte.php" >retour à la page d ajout d articles</a> 

</body> 
</html>
