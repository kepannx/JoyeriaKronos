<?php 
session_start();
require_once('../../Connections/joyeria.php');
$session=session_id();
$error="./administrador/index.php?mensaje=error";
$id_administrador=$_GET["id_administrador"];
$sql="SELECT * FROM administrador WHERE id_administrador='$id_administrador' AND validacion='$session'";
@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
$check=mysql_fetch_array($query);
if($check["id_administrador"]==NULL){
header ("Location: .$error"); 
	}
	else {

// filename: upload.form.php

// first let's set some variables

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'ingreso.php';

// set a max file size for the html upload form
$max_file_size = 3000000000000; // size in bytes

// now echo the html page
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Administrador </title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../style.css" />
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyidex">
  <div class="separador"></div>
  <div class="contenedorpanel">
    	Panel Categorias/ <font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br />
    <br />
    <form action="<?php echo $uploadHandler ?>" method="post" enctype="multipart/form-data" id="Upload">
    <div class="contenedorfrm">
   	  <div id="contenidoform">Nombre de la Marca</div>
   	  <span id="sprytextfield2">
   	  <label>
   	    <input type="text" name="marca" id="marca" />
 	    </label>
   	  <span class="textfieldRequiredMsg"><font color="#000000">El nombre de la categoria es necesaria</font></span></span> </div>
      
      <div class="contenedorfrm">
       
      	<div id="contenidoform"><label for="file">Archivo</label> 
      	de imagen</div>
        <div id="contenidoform" align="center">
          
			<input id="file" type="file" name="file"> <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>" />
        </div>
      
      </div>
      
      
    <div class="contenedorfrm" align="center">
       <a href="index.php?id_administrador=<?php echo  $_GET["id_administrador"]; ?>"><img src="../../images/btn/volver.gif" alt="" / border="0" /></a>|
<input id="submit" type="submit" name="submit" value="Guardar" />
      <input name="id_administrador" type="hidden" id="id_administrador" value="<?php echo $_GET['id_administrador']?>" />
    </div>
    </form>
  </div>

</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>

</html>

<?php 
}
?>