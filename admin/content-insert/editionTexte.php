<?php
include('../../inc/header2.php');
?>

</head>  

<body>

<?php
include('../../inc/navBarResponsive.php');
include('../../inc/sideBar.php');
?>
 
   <div class="container" style="width:900px;">  
   <h3 class="text-center pb-5">Edition texte</h3>  
   <br>
   <div class="text-right">
    <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
   </div>
   <br>
   <div id="image_data">
                  </div>
               </div>  
            </div>
         </div>
      </div>
   </div>
</div>
 
</body> 

<script src="../../dist/js/sideBar.js"></script>
<script src="../../dist/js/delete-text.js"></script>
 
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Ajouter un article</h4>
   </div>
   <div class="modal-body">
   <form  action="insertionTexte.php" method="POST" enctype="multipart/form-data"> 
      <p>Titre de l'article: <input type="text" name="titre" /></p> 
      <p>Contenu: <br><textarea name="contenu" rows="10" cols="26"></textarea></p> 
      <input type="submit" name="ok"  value="Envoyer"> 
   </form>   
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
   </div>
  </div>
 </div>
</div>
 