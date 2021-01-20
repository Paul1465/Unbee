<?php 
 session_start();
include("config/database.php");



  if(isset($_SESSION['admin']))
    {
      header("location:admin/");
    }
  
    include("inc/header.php");
 ?>
<link rel="stylesheet" href="dist/css/login.css">
</head>

<body>
<div id="loading"></div>

  <div class="container h-90 d-flex justify-content-center mb-5 mt-5">
    <div class="row mb-5">
      <div class="col-sm-12 mb-3">
      <img class="logoUnbee1" src="dist/img/picto-unbee.png" alt="">
      </div>
    </div>
  </div>

<div class="container h-100 d-flex justify-content-center">
  <h2 class="d-flex justify-content-center mb-4">Connectez-vous</h2>
  <form class="form-horizontal" method="post">
    <div class="form-group">
     <!-- <label class="control-label col-sm-2">Email:</label> -->
      <div>
        <input type="text" class="form-control mt-4"  placeholder="Entrez votre identifiant" name="admin_name" required="">
      </div>
    </div>
    <div class="form-group">
   <!--   <label class="control-label col-sm-2">Password:</label> -->
      <div>          
        <input type="password" class="form-control mt-4" placeholder="Enter password" name="password" required="">
      </div>
    </div>
 
    <div class="form-group d-flex justify-content-center">        
      <div class="col-sm-offset-9 col-sm-3 mt-4">
        <button type="submit" name="Login" class="btn loginBtn  mt-1 ">Login</button>
         
      </div>
    </div>
  </form>
</div>

<?php

  if (isset($_REQUEST['Login'])) 
    {   
      $admin_name = htmlspecialchars($_REQUEST['admin_name']); 
      $password = htmlspecialchars($_REQUEST['password']);
      
      $admin = mysqli_query($con,"SELECT * FROM `tbl_admin` WHERE admin_name='$admin_name' and password= $_HASH('$password')");

      // Admin
      if(mysqli_num_rows($admin) > 0)
      {
        $s = mysqli_fetch_assoc($admin);
        if($s['admin_name']=='".mysqli_real_escape_string($_POST[$admin_name])."' && $s['password']==
        '".mysqli_real_escape_string($_POST[$password])."');
        {
          $_SESSION['admin'] = $s['admin_name'];
            $_SESSION['id'] = $s['admin_id'];
          header('location:admin/content-insert/index.php');
          $id = $_SESSION['id'];
        }
      }

  else
    { 
      ?>
      <script type="text/javascript">
        alert("Identifiant ou mot de passe invalide.");
      </script>
        <?php
     }
    }
  ?>

 <script src="dist/js/loading.js"></script>

  </body>
   </html>