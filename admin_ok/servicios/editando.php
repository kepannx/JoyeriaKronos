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
		
		$id_servicio=$_GET["id_servicio"];
		$sqledito="SELECT * FROM servicios WHERE id_servicio='$id_servicio'";
		@$queryedito=mysql_db_query($database_joyeria,$sqledito,$joyeria);
		$servicio=mysql_fetch_array($queryedito);

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
<script src="../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyintro2">
  <div class="separador"></div>
  <div class="contenedorpanel">
    	Panel Servicios/ <font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br />
    <br />
    <form action="edito.php" method="post" enctype="multipart/form-data">
    <div class="contenedorfrm">
   	  <div id="contenidoform">Producto</div>
   	  <span id="sprytextfield2">
   	 <div id="contenidoform2"> <label>
   	    <input name="servicio" type="text" id="servicio" value="<?php echo $servicio["servicio"]; ?>" />
 	    </label><span class="textfieldRequiredMsg"><font color="#000000">El nombre de la categoria es necesaria</font></span></div></span></div>
    <div class="contenedorfrm2" align="center"><br />
        <div id="contenidoform">Descripcion</div><br />
<span id="sprytextarea2">
        <label>
         <textarea name="descripcion" id="descripcion" cols="80" rows="5"><?php echo $servicio["descripcion"]; ?></textarea>
       </label>
      </div>
    <div class="contenedorfrm" align="center">
       <a href="editar.php?id_administrador=<?php echo  $_GET["id_administrador"]; ?>"><img src="../../images/btn/volver.gif" alt="" / border="0" /></a>|
       <label>
         <input type="image" name="imageField" id="imageField" src="../../images/btn/editar.gif" />
       </label>
       <input name="id_administrador" type="hidden" id="id_administrador" value="<?php echo $_GET['id_administrador']?>" />
      <input name="id_servicio" type="hidden" id="id_servicio" value="<?php echo $_GET['id_servicio']?>" />
    </div>
    </form>
  </div>

</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</body>

</html>

<?php 
}
?>