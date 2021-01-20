<?php

define('HTML_TEMPLATE', 'default2.tmpl');

if (!file_exists(HTML_TEMPLATE))
	die( HTML_TEMPLATE . ' est manquant');
	
if (isset($_REQUEST['save'])) {
	$inputs = filter_input_array(INPUT_POST, array(
		'page_name' => FILTER_SANITIZE_ENCODED,
		'page_title' => FILTER_SANITIZE_ENCODED,
		'page_content' => FILTER_UNSAFE_RAW,
		'page_content2' => FILTER_UNSAFE_RAW,
	));
	$v_return = '<br> <a class="text-primary" href="create2.php" >retour à la création de page banderoles  </a>'  ;
	$buffer = file_get_contents(HTML_TEMPLATE);
	$buffer = str_replace(array('%title%','%content%','%content2%' ), array($inputs['page_title'], $inputs['page_content'], $inputs['page_content2']), $buffer);
	if (file_put_contents($path = "pages/{$inputs['page_name']}.php", $buffer))
		die('Fichier Créer: '. realpath($path) .    $v_return); 
	else
		die('Impossible de créer: ' . realpath($path));
}


?>
<?php
include('../../../inc/navBarResponsive.php');
include('../../../inc/sideBar2.php');
include('../../../inc/header3.php');
?>

	
<section class="mt-5">
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col-12 mt-5">
            <h1>Création de pages banderoles</h1>
            <form class="mt-5" method="post">
	        <label for="page_name">Nom de la page</label><input class="ml-4" type="text" name="page_name" id="page_name" />
            <br> <label class="mt-4" for="page_title">Id de la banderole</label><input class="ml-1" type="text" name="page_title" id="page_title" />
	        <br><label class="mt-4" for="page_content">Numero de page</label><select class="ml-3" name="page_content" id="page_content">   <div class="form-group">
        
          <option value="3">1</option>
          <option value="4">2</option>
          <option value="5">3</option>
          <option value="6">4</option>
          <option value="7">5</option>
          <option value="8">6</option>
          <option value="0">Fin du diaporama</option>
          
          </select>
	<label for="page_content2"></label><select name="page_content2" id="page_content2">   <div class="form-group">
        
         
          <option value=""></option>
          <option value="$dir1 = 'Unbee-master/admin/content-insert/diaporama1-slider.php';">Fin du diaporama</option>
          
          </select>
<br>	<input  class="btn btn-info bt-xs mt-5 mr-3" type="submit" name="save" value="Créer" />
	
</form>
</div>
		</div>
	</div>
</section>

	</body>
	<script src="../../../dist/js/sideBar.js"></script>
 </html>