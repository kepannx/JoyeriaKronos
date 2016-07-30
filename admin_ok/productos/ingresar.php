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
<script src="../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyintro2">
  <div class="separador"></div>
  <div class="contenedorpanel">
    	Panel Productos/ <font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br />
    <br />
   <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">
    <div class="contenedorfrm">
   	  <div id="contenidoform">Producto</div>
   	  <span id="sprytextfield2">
   	 <div id="contenidoform2"> <label>
   	    <input type="text" name="producto" id="producto" />
 	    </label><span class="textfieldRequiredMsg"><font color="#000000">El nombre de la categoria es necesaria</font></span></div></span>
   	  <div id="contenidoform">Referencia</div><div id="contenidoform2"><span id="sprytextfield3">
   	    <label>
   	      <input type="text" name="referencia" id="referencia" />
 	      </label>
      <span class="textfieldRequiredMsg">La  referencia es necesaria</span></span></div></div>
      
      <div class="contenedorfrm">
      
      
      
   	  <div id="contenidoform">SubCategoria</div>
   	  <span id="sprytextfield2">
   	 <div id="contenidoform2"><span id="spryselect1">
   	   <label>
   	    <select name="subcategoria" id="subcategoria">
   	       <option>Seleccione</option>
           <?php 
		   $sql="SELECT * FROM subcategoria";
		   @$query=mysql_db_query($database_joyeria,$sql,$joyeria);
			while($categoria=mysql_fetch_array($query)){
		   ?>
   	       <option value="<?php echo $categoria["id_subcategoria"];?>"><?php echo $categoria["subcategoria"];?></option>
           <?php } ?>
 	       </select>
 	     </label>
   	   <span class="selectRequiredMsg">Please select an item.</span></span></div></span>
   	  <div id="contenidoform">Categoria</div>
   	  <div id="contenidoform2">
      	<span id="spryselect2">
      	<label>
      	  <select name="categoria" id="categoria">
   	       <option>Seleccione</option>
           <?php 
		   $sql="SELECT * FROM categorias";
		   @$query=mysql_db_query($database_joyeria,$sql,$joyeria);
			while($categoria=mysql_fetch_array($query)){
		   ?>
   	       <option value="<?php echo $categoria["id_categoria"];?>"><?php echo $categoria["categoria"];?></option>
           <?php } ?>
 	       </select>
    	  </label>
      	<span class="selectRequiredMsg">Please select an item.</span></span></div></div>
      
      <div class="contenedorfrm">
   	  <div id="contenidoform">Valor</div>
   	  <span id="sprytextfield2">
   	 <div id="contenidoform2"><span id="sprytextfield4">
   	   <label>
   	     <input type="text" name="valor" id="valor" />
 	     </label>
   	   <span class="textfieldRequiredMsg">A value is required.</span></span></div>
   	  <div id="contenidoform">Tags</div>
   	  <div id="contenidoform2"><span id="spryselect2">
   	    <label><span id="sprytextfield5">
   	      <input type="text" name="tags" id="tags" />
   	      <span class="textfieldRequiredMsg">A value is required.</span></span> 	      </label>
   	    </div></div>
      
      
      
      <div class="contenedorfrm">
       
      	<div id="contenidoform"><label for="file">Archivo</label> 
      	de imagen</div>
        <div id="contenidoform" align="center">
          
			<input id="file" type="file" name="file"> <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>" />
        </div>
        
        
        <div id="contenidoform">Marca(solo reloj)</div>
   	  <span id="sprytextfield2">
   	 <div id="contenidoform2"><span id="spryselect1">
   	   <label>
   	    <select name="marca" id="marca">
   	       <option value="">Seleccione</option>
           <?php 
		   $sql="SELECT * FROM relojes";
		   @$query=mysql_db_query($database_joyeria,$sql,$joyeria);
			while($marca=mysql_fetch_array($query)){
		   ?>
   	       <option value="<?php echo $marca["id_marca"];?>"><?php echo $marca["marca"];?></option>
           <?php } ?>
 	       </select>
 	     </label>
   	   <span class="selectRequiredMsg">Please select an item.</span></span></div></span>
       <div class="contenedorfrm">
       	<div id="contenidoform">Material</div>
       	<span id="sprytextfield6">
       	<label>
       	  <input type="text" name="material" id="material" />
     	  </label>
       	<span class="textfieldRequiredMsg">A value is required.</span></span> </div>
      </div>
      
      <div class="contenedorfrm2" align="center"><br />
        <div id="contenidoform">Descripcion</div><br />
<span id="sprytextarea2">
        <label>
         <textarea name="descripcion" id="descripcion" cols="80" rows="5"></textarea>
       </label>
      </div>
    <div class="contenedorfrm" align="center">
       <a href="index.php?id_administrador=<?php echo  $_GET["id_administrador"]; ?>"><img src="../../images/btn/volver.gif" alt="" / border="0" /></a>|
<input name="submit" type="submit" class="bgboton" id="submit" value="."/>
      <input name="id_administrador" type="hidden" id="id_administrador" value="<?php echo $_GET['id_administrador']?>" />
      
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