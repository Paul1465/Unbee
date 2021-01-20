<?php 
include('../../config/database.php');
include('../../inc/header2.php');
?>

</head>  

<body>

<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');
?>











<?php
//include connection bdd

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// vérification du bon formulaire 
    $query = "UPDATE `tbl_diaporama` SET `temps`= '".$_POST['select_temps']."' WHERE id ='".$_GET["id"]."'";
    if(mysqli_query($con, $query)){  
        echo "Ajout du temps définit";
   }  
}
?>
<br class="mt-5">
<a class="text-primary" href="editionTemps.php" >retour à la page d'ajout du temps</a> 
</body>
</html>