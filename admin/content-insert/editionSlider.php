<?php 
     include('../../inc/header2.php'); 
?>

</head>

<body>
    <?php include('../../inc/navBarResponsive.php'); 
          include('../../inc/sideBar.php'); 
    ?>
    <div class="container" style="width:900px;">
        <h3 class="text-center pb-5">Edition d'images</h3>
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
<script src="../../dist/js/upload-image.js"></script>

</html>

<div id="imageModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter une image</h4>
            </div>
            <div class="modal-body">
                <form id="image_form" action="uploadSlider.php" method="post" enctype="multipart/form-data">
                    <p>
                        <label>Selectionner une image</label>
                        <input type="file" name="image" id="image" />
                    </p>
                    <br>
                    <input type="submit" name="insert" id="insert" value="Insérer" class="btn btn-info" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>