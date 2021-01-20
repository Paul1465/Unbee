<?php 
// define("_imgPath", _base."admin/ajax-image-insert/img/");
 
 //importing dbDetails file 
 require_once '../../config/database.php';

 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //checking the required parameters from the request 
 if(isset($_FILES['image']['name'])){
 
 
 //getting file info from the request 
 $fileinfo = pathinfo($_FILES['image']['name']);
 
 //getting the file extension 
 $extension = $fileinfo['extension'];
 

 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
 	{
        echo 'Unknown image format.';
    }

//jpg-jpeg     
if($extension=="jpg" || $extension=="jpeg" )
    {
        $uploadedfile = $_FILES['image']['tmp_name'];
        $src = imagecreatefromjpeg($uploadedfile);
        list($width,$height)=getimagesize($uploadedfile);
        
        //set new width
        $newwidth1=1110;
        $newheight1=($height/$width)*$newwidth1;
        $tmp1=imagecreatetruecolor($newwidth1,$newheight1);
                
        imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);

        //new random name        
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
                
        $filename1 = "img/". $newfilename;
                    
        imagejpeg($tmp1,$filename1,100);
        
        imagedestroy($src);
        imagedestroy($tmp1);
        //insert in database
        $insert=mysqli_query($con, "INSERT INTO `tbl_diaporama` (img) VALUES ('$filename1');");

        echo "Votre image à bien été mis à jour";
    }

//png
    else if($extension=="png")
    {
        $uploadedfile = $_FILES['image']['tmp_name'];
        $src = imagecreatefrompng($uploadedfile);
        list($width,$height)=getimagesize($uploadedfile);

        //set new width            
        $newwidth1=1110;
        $newheight1=($height/$width)*$newwidth1;
        $tmp1=imagecreatetruecolor($newwidth1,$newheight1);
                
        imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);
        
        //new random name
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
                
        $filename1 = "img/". $newfilename;
                    
        imagejpeg($tmp1,$filename1,100);
        
        imagedestroy($src);
        imagedestroy($tmp1);

        //insert in database
        $insert=mysqli_query($con, "INSERT INTO `tbl_diaporama` (img) VALUES ('$filename1');");

       
    }    
    else if($extension=="gif") {
    $uploadedfile = $_FILES['image']['tmp_name'];
    
    //new random name

    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
                
    $filename1 = "img/". $newfilename;

	move_uploaded_file($uploadedfile,$filename1);

    //insert in database
    $insert=mysqli_query($con, "INSERT INTO `tbl_diaporama` (img) VALUES ('$filename1');");
    

   
    }
    else    
    {
        echo 'error';
    }
}
}

  

if(isset($_POST["action"]))
{
 include('../../config/database.php');
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM `tbl_diaporama` ORDER BY id DESC";
  $result = mysqli_query($con, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="80%">Image(s)</th>
     <th width="10%">Supprimer</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {

   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
     <img src='.$row['img'] .' height="60" width="75" class="img-thumbnail" />     
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Supprimer</button></td>
     </td>
    </tr>
   ';
}

  
  $output .= '</table>';
  echo $output;
 }


 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM `tbl_diaporama`  WHERE id = '".$_POST["id"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'Image supprimer de la base de donnée';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query1 = "ALTER TABLE `tbl_diaporama` AUTO_INCREMENT=0";
  
  if(mysqli_query($con, $query1))
  {
    
   echo '';
  }
 }
 }


