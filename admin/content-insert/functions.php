<?php 

//incrémentation du paramétre $files1 dans index.php
 static $compter = 1;
function incrementFilename() {
   static $compter = 1;
   
    $compter++;
    return $compter;
 
    
    
}
//incrémente mes titres présent dans le sommaire
static $counter = 3;
function incrementTitle() {
    static $counter = 3;
    $counter++;

    echo $counter;
    
}
//incrémente l'identifiant de mes banderole dans mon sommaire
function displayIncrementBanderole($con) {
    static $countBanderole = 1;
    $countBanderole++;
    

    $reponse = $con->query("SELECT * FROM `tbl_banderole` WHERE id = ($countBanderole) ");
    while ($donnees = $reponse->fetch_array()) {  
       echo '<p font-size: 48px" class="modifTexte">' . $donnees['texte_banderole'] . '</p>'; 
       }
}
//incrémente l'identifiant de mes pages texte dans mon sommaire
function displayincrementText($con){
   static $countArticles = 2;
   $countArticles++;

   static $countArticles2 = 3;
   $countArticles2++;

   $reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ($countArticles)");
   while ($donnees = $reponse->fetch_array()) {
      echo '<div class= ' . $donnees['effect'] . ' style= font-size:' . $donnees['taille'] . '>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';

   }
   $reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ($countArticles2)");
   while ($donnees = $reponse->fetch_array()) {
      echo '<div class= ' . $donnees['effect'] . ' style= font-size:' . $donnees['taille'] . '>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>';
      echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';

   }
}
//Affiche le contenu du prochain fichier créer par l'utilisateur
  function displayPages($filename, $con){

               
    if (file_exists($filename) && filesize($filename) > 3000 && strlen($filename) > 21 ) {
       ?><section>
       <div class="container mt-5">
          <div class="row mt-5">
             <div class="justify-content-center mt-5">
                <div class="traitBlanc1">
                   <h3 class="customTitle4 "><?php 
                  incrementTitle();
                 ?>ème page</h3>
                </div>
                <div class="row whiteSpace2">
                   <div class=" col-md-12 ">
                      <?php
      displayincrementText($con);
    }
    
    elseif (file_exists($filename) && filesize($filename) < 3000 && strlen($filename) > 21 )  {?><section id="aerationPara">
       <div class="container-fluid">
          <div class="row">
             <div class="traitBlanc">
                <h3 class="customTitle4 "><?php 
               incrementTitle();        
              ?>ème page</h3>
             </div>
             <div class="row">
                <div class="whiteSpace1"></div>
             </div>
          </div>
       <h1 class="defileParent defile text-right" style="height:104px;">
       <?php         
       displayIncrementBanderole($con); ?></h1>
          </div>
       </section>
<?php

}else {
echo "";
}
}

 
?>