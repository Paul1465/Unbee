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
    $query = "UPDATE `tbl_article` SET `effect`= '".$_POST['select_effect']."' WHERE id ='".$_GET["id"]."'";
    if(mysqli_query($con, $query)){  
        echo "L effet de l article a bien été ajouté";
   }  
}
?>
<br class="mt-5">
<a class="text-primary" href="editionTexte.php" >retour à la page d'ajout du texte.</a> 
</body>
</html>