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
		$id_subcategoria=$_GET["id_subcategoria"];
		
$sql="SELECT * FROM subcategoria WHERE id_subcategoria='$id_subcategoria'";
@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
$subcategoria=mysql_fetch_array($query);
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
    	Panel SubCategorias/ <font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br />
    <br />
    <form action="edito.php" method="post">
    <div class="contenedorfrm">
   	  <div id="contenidoform">Nombre de la Categoria</div>
   	  <span id="sprytextfield2">
   	  <label>
   	    <input name="subcategoria" type="text" id="subcategoria" value="<?php echo $subcategoria["subcategoria"]; ?>" />
 	    </label>
   	  <span class="textfieldRequiredMsg"><font color="#000000">El nombre de la subcategoria es necesaria</font></span></span> 
   	  <input name="id_subcategoria" type="hidden" id="id_subcategoria" value="<?php echo $_GET["id_subcategoria"];?>" />
    </div>
    <div class="contenedorfrm" align="center">
      <label>
        <a href="editar.php?id_administrador=<?php echo $_GET["id_administrador"];?>"><img src="../../images/btn/volver.gif" alt="" border="0" /></a>|
        <input type="image" name="imageField" id="imageField" src="../../images/btn/guardar.gif" />
      </label>
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