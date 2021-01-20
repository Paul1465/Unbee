<?php include('../config/database.php');
	session_start();
	$id = $_SESSION['id'];

	$sel1 = "SELECT * FROM user where user_id ='$id'";
	$res = mysqli_query($con,$sel1);
	$row = mysqli_fetch_assoc($res);
	$id=$row['user_id'];

	if(!$_SESSION['id'])         
		{
			header('location:../index.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>user index page</title>
</head>
<body>

	    <a href="logout.php"> <h3>logout</h3></a><br>
	    <h1>Welcome <?php echo $row['user_name']; ?></h1>
	
</body>
</html>