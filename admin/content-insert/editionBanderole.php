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
   <br />
   <div class="text-right">
    <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
   </div>
   <br />
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
<script src="../../dist/js/delete-banderole.js"></script>
 
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Ajouter le nom de la banderole</h4>
   </div>
   <div class="modal-body">
   <form action="insertionBanderole.php" method="POST" enctype="multipart/form-data"> 
      <p>Texte de la banderole <input type="text" name="texte_banderole" /></p> 
      <input type="submit" name="ok"  value="Envoyer"> 
   </form> 
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
   </div>
  </div>
 </div>
</div>
 
