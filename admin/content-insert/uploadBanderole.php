<?php if(isset($_POST["action"]))
{
 include('../../config/database.php');
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM `tbl_banderole` ORDER BY id DESC";
  $result = mysqli_query($con, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="20%">ID</th>
     <th width="60%">Texte Banderole</th>
     <th width="20%">Supprimer</th>

    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
     <h4>'.$row["texte_banderole"].'</h4>
     </td>

     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Supprimer</button></td>
          
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }


 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM `tbl_banderole`  WHERE id = '".$_POST["id"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'Image supprimer de la base de donnée';
  }
 }

 if($_POST["action"] == "delete")
 {
  $query1 = "ALTER TABLE `tbl_banderole` AUTO_INCREMENT=0";
  
  if(mysqli_query($con, $query1))
  {
    
   echo '';
  }
 }
 }
 ?>