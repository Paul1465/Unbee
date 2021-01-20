<?php
 if(isset($_POST["action"]))
{
 include('../../config/database.php');
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT id, temps FROM tbl_diaporama ORDER BY id ASC LIMIT 1";
 
  $result = mysqli_query($con, $query);


  

  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="100%">Temps Slider</th>
     
    
  
    </tr>
  ';
  while($row = mysqli_fetch_array($result)) 
 

  {
   
    

   $output .= '

    <tr>
     <td>  <form method="POST" action="update-custom-times.php?id='.$row["id"].'" name="form-temps-'.$row["id"].'" id="form-temps-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
       <input class="form-control" name="select_temps" placeholder="Veuillez entrer le temps en secondes" id="select-temps-'.$row["id"].'" data-id='.$row["id"].'>
          </input>
          <button type="submit" id="btn-effect-'.$row["id"].'" name="btn-temps-'.$row["id"].'" class="btn btn-info bt-xs insert-temps mt-4" id=" '.$row["id"].'">Modifier</button>
        </div>
      
   </form> 
     </td>
     
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }
 {
  $query = "SELECT id, temps FROM tbl_banderole ORDER BY id ASC LIMIT 1";
 
  $result = mysqli_query($con, $query);


  

  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
   
     <th width="100%">Temps Banderole</th>
     
    
  
    </tr>
  ';
  while($row = mysqli_fetch_array($result)) 
 

  {
   
    

   $output .= '

    <tr>
 
     <td>  <form method="POST" action="update-custom-timesBanderole.php?id='.$row["id"].'" name="form-temps-'.$row["id"].'" id="form-temps-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
       <input class="form-control" name="select_temps" id="select-temps-'.$row["id"].'" data-id='.$row["id"].'>
          </input>
          <button type="submit" id="btn-effect-'.$row["id"].'" name="btn-temps-'.$row["id"].'" class="btn btn-info bt-xs insert-temps mt-4" id=" '.$row["id"].'">Modifier</button>
        </div>
      
   </form> 
     </td>
    
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }
 {
  $query = "SELECT id, temps FROM tbl_article ORDER BY id ASC LIMIT 1";
 
  $result = mysqli_query($con, $query);


  

  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     
     <th width="100%">Temps Texte</th>
    
  
    </tr>
  ';
  while($row = mysqli_fetch_array($result)) 
 

  {
   
    

   $output .= '

    <tr>
    
     <td>  <form method="POST" action="update-custom-timesText.php?id='.$row["id"].'" name="form-temps-'.$row["id"].'" id="form-temps-'.$row["id"].'" data-id="'.$row["id"].'">
     <div class="form-group">
       <input class="form-control" name="select_temps" id="select-temps-'.$row["id"].'" data-id='.$row["id"].'>
          </input>
          <button type="submit" id="btn-effect-'.$row["id"].'" name="btn-temps-'.$row["id"].'" class="btn btn-info bt-xs insert-temps mt-4" id=" '.$row["id"].'">Modifier</button>
        </div>
      
   </form> 
     </td>
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }
 }
 ?>
