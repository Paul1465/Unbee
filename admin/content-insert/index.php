<?php
session_start();

include('../../config/database.php');
include('../../inc/header2.php');
include('functions.php');
ini_set('display_errors','off');

header('Content-Type: image');



$dir       = 'C:/xampp/htdocs/';
$dir1      = 'Unbee-master/admin/content-insert/page_generator/pages/';
$dir2      = 'url=http://localhost/';
$files1    = scandir($dir . $dir1);
$firstFile = $dir . $dir1 . $files1[$compter]; 
$filename  = 'page_generator/pages/' . $files1[incrementFilename()];


?> 
</head>  
<body>
   
<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');
?> 

<div class="container customContainer">
   
	<div class="row">
		<div class="col-md-12 col-xs-12 justify-content-center">
			<h1 class="customTitleDiaporama">Diaporama</h1>
		</div>
	</div>
</div>
<section class="mt-5">
	<div class="container">
		<div class="row whiteSpace2">
			<div class="traitBlanc">
				<h3 class="customTitle1">1ère page</h3>
			</div>
		</div>
		<div class="row whiteSpace3">
			<div class="offset-md-4 col-md-7 offset-md-1 col-xs-12 ">
				<ul class="slider dimensions bxslider  bx-wrapper slider-area">

               <?php
               $reponse = $con->query('SELECT * FROM `tbl_diaporama` LIMIT 3');
               while ($donnees = $reponse->fetch_array()) {
                   //echo '<div class= ' . $donnees['effect'] .      '>' ;
                   echo '<li class="bx-slide"><img src="' . $donnees['img'] . '"/></li>';
               }
               ?>
          </ul>
        </div>
		</div>
	</div>
</section>

<section id="aerationPara">
	<div class="container">
		<div class="row">
			<div class="traitBlanc">
				<h3 class="customTitle1">2ème page</h3>
			</div>
			<div class="row">
				<div class="whiteSpace1"></div>
			</div>
		</div>
		<h1 class="defileParent defile text-right" style="height:104px;">
<?php
      $reponse = $con->query('SELECT * FROM `tbl_banderole` LIMIT 1');
      while ($donnees = $reponse->fetch_array()) {
         echo '<p class="modifTexte customTexte2">' . $donnees['texte_banderole'] . '</p>';
      }
?>
     </h1>
   </div>
</section>
<section>
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="justify-content-center mt-5">
				<div class="traitBlanc1">
					<h3 class="customTitle1">3ème page</h3>
				</div>
				<div class="row whiteSpace2">
					<div class="offset-md-4 col-md-7 offset-md-1">
                   <?php
                    $reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ('1')");
                    while ($donnees = $reponse->fetch_array()) {
                        echo '<div class= ' . $donnees['effect'] . ' style= font-size:' . $donnees['taille'] . '>';
                        echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
                        echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>'; 
                        echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';
                    }
                    ?>
                  </div>
                </div>
             </div>                 
              <div class="row mt-5">
               <div class="offset-md-4 col-md-7 offset-md-1">
         <?php
         $reponse = $con->query("SELECT * FROM `tbl_article` WHERE id = ('2')");
         while ($donnees = $reponse->fetch_array()) {
            echo '<div class= ' . $donnees['effect'] . ' style= font-size:' . $donnees['taille'] . '>';
            echo '<p class=' . $donnees['police'] . '>' . $donnees['Titre'] . '</p>';
            echo '<p class=' . $donnees['police'] . '>' . $donnees['contenu'] . '</p>';
            echo '<p class=' . $donnees['police'] . '>' . $donnees['date'] . '</p>';
         }
?>
<?php 
//Affiche le contenu des fichiers créer par l'utilisateur
      while (strlen($filename) > 21)
      {
 
      displayPages($filename, $con, $counter);

      $filename  = 'page_generator/pages/' . $files1[incrementFilename()];
  
      }

?>
                  

         </div>
       </div>
     </div>
   </div>
<script>$("p").addClass("customTexteInsert1");</script>
                  
                   <div class="container d-flex justify-content-center mt-5 mb-5">
                      <div class="row mt-5">         
                         <div class="col-sm-offset-9 col-sm-3 mt-4 mb-5" >
                            <a href="diaporama1-slider.php"> 
                               <button type="submit"  class="btn btn-change5 colorBtn mt-5">Lancer Diaporama      
                              </button>
                           </a> 
                        </div>
                     </div> 
                  </div>
               </section>
             </div> 
           </div>
          
        </div>
      </div>
     </div>
    </div>
  </div>
</section>



<?php 

include('../../inc/footer.php');
?>

  <script>
    $('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  autoControls: false,
  pager: false,
  
});
  </script>
 </body>

 <script src="../../dist/js/sideBar.js"></script>
 </html>