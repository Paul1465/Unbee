<?php
include('../../config/database.php');
include('../../inc/header2.php');
?>

</head>  

<body>

<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// vérification du bon formulaire 
    $query = "UPDATE `tbl_article` SET `taille`= '".$_POST['select_taille']."' WHERE id ='".$_GET["id"]."'";
    if(mysqli_query($con, $query)){  
        echo "La taille de l article à bien été modifiée";
   }  
}

?>
<br class="mt-5">
<a class="text-primary" href="editionTexte.php" >retour à la page d'ajout du texte.</a> 
</body>
</html>