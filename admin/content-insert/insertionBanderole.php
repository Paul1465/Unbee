<?php
include('../../config/database.php');
include('../../inc/header2.php');
?>

</head>  

<body>

<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');

 

$requete = "INSERT INTO tbl_banderole (texte_banderole) VALUES ('".htmlentities(addslashes($_POST['texte_banderole']), 
ENT_QUOTES)."')"; 
$resultat = mysqli_query($con,$requete); 
$identifiant = mysqli_insert_id($con); 
/* Fermeture de la connexion */ 
mysqli_close($con); 
 
if ($identifiant != 0) { 
   echo "<br />L ajout de la banderole a réussi.<br /><br />"; 
} 
else { 
   echo "<br />La banderole n a pas pu être ajouté.<br /><br />"; 
} 
?> 
<a class="text-primary" href="editionBanderole.php" >retour à la page d ajout de banderole</a> 

</body> 

</html>
