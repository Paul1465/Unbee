<?php 

$dir       = 'C:/xampp/htdocs/';
$dir1      = 'Unbee-master/admin/content-insert/page_generator/pages/';;
$files1    = scandir($dir . $dir1);
$filename  = 'pages/' . $files1[2];
$filename1  = 'pages/' . $files1[3];
$filename2  = 'pages/' . $files1[4];
$filename3  = 'pages/' . $files1[5];
$filename4  = 'pages/' . $files1[6];
$filename5  = 'pages/' . $files1[7];
$filename6  = 'pages/' . $files1[8];
$formulaire = '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete" type="submit"  value="Supprimer le fichier ' . $files1[2] . '">
</form>    ';
$formulaire1 = '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete1" type="submit" value="Supprimer le fichier ' . $files1[3] . '">
</form>    ';
$formulaire2 = '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete2" type="submit" value="Supprimer le fichier ' . $files1[4] . '">
</form>    ';
$formulaire3 = '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete3" type="submit" value="Supprimer le fichier '. $files1[5] . '">
</form>    ';
$formulaire4 =  '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete4" type="submit" value="Supprimer le fichier ' . $files1[6] . '">
</form>    ';
$formulaire5 =  '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete5" type="submit" value="Supprimer le fichier ' . $files1[7] . '">
</form>    ';
$formulaire6 =  '<form method="POST">
<input class="btn btn-info bt-xs mb-5" name="delete6" type="submit" value="Supprimer le fichier ' . $files1[8] . '">
</form>    ';
?>
