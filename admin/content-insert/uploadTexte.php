<?php 

if(isset($_POST["action"]))
{
  include('../../config/database.php');
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM `tbl_article` ORDER BY id DESC";
  $result = mysqli_query($con, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="50%">Article(s)</th>
     <th width="10%">Supprimer</th>
     <th width="10%">Effets</th>
     <th width="10%">Taille</th>
     <th width="10%">Forme du texte</th>
     
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
     <h4>'.$row["Titre"].'</h4>
     </td>
       
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Supprimer</button></td>
     <td>  <form method="POST" action="update-effect-text.php?id='.$row["id"].'" name="form-effect-'.$row["id"].'" id="form-effect-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
        <select class="form-control" name="select_effect" id="select-effect-'.$row["id"].'" data-id='.$row["id"].'>
          <option value="fadeInLeft" >Vient de gauche</option>
          <option value="fadeInRight" >Vient de droite</option>
          <option value="fadeInDownBig" >Vient du haut</option>
          <option value="fadeInUp" >Vient du bas</option>
          <option value="fadeIn" >Apparission</option>
          <option value="zoomIn" >Zoom</option>
          </select>
          <button type="submit" id="btn-effect-'.$row["id"].'" name="btn-effect-'.$row["id"].'" class="btn btn-info bt-xs insert-effect mt-4" id=" '.$row["id"].'">Modifier</button>
        </div></form></td>
     <td>  <form method="POST" action="update-custom-text.php?id='.$row["id"].'" name="form-taille-'.$row["id"].'" id="form-taille-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
        <select class="form-control" name="select_taille" id="select-taille-'.$row["id"].'" data-id='.$row["id"].'>
        <option value="16px">16px</option>
          <option value="18px" >18px</option>
          <option value="20px" >20px</option>
          <option value="24px" >24px</option>
          <option value="28px" >28px</option>
          <option value="32px" >32px</option>
          
          </select>
          <button type="submit" id="btn-effect-'.$row["id"].'" name="btn-taille-'.$row["id"].'" class="btn btn-info bt-xs insert-taille mt-4" id=" '.$row["id"].'">Modifier</button>
        </div></form></td>
     <td>  <form method="POST" action="update-police-text.php?id='.$row["id"].'" name="form-police-'.$row["id"].'" id="form-police-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
        <select class="form-control" name="select_police" id="select-police-'.$row["id"].'" data-id='.$row["id"].'>
       
          <option value=" customNormalActive ">normal</option>
          <option value=" customItalicActive ">italique</option>
          <option value=" customObliqueActive ">oblique</option>
          <option value=" customBoldActive ">gras</option>
          
          </select>
          <button type="submit" id="btn-police-'.$row["id"].'" name="btn-police-'.$row["id"].'" class="btn btn-info bt-xs insert-police mt-4" id=" '.$row["id"].'">Modifier</button>
        </div></form></td>

     </td>
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }


 if($_POST["action"] == "delete")
 {
   $query = "DELETE FROM `tbl_article`  WHERE id = '".$_POST["id"]."'"; 
  
  if(mysqli_query($con, $query))
  {
    
   echo 'Image supprimer de la base de donnée';
  }
 }

 if($_POST["action"] == "delete")
 {
  $query1 = "ALTER TABLE `tbl_article` AUTO_INCREMENT=0";
  
  if(mysqli_query($con, $query1))
  {
    
   echo '';
  }
 }

 }
 ?>
 
 






