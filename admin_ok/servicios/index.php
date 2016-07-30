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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Administrador </title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../administrador/style.css" />
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyidex">
  <div class="separador"></div>
  <div class="contenedorpanel">
    	Panel Servicios <font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br />
    <br />
   <div class="contenedorbtnpanel" align="center"><a href="ingresar.php?id_administrador=<?php echo  $check["id_administrador"]; ?>"><img src="../../images/btn/ingresar_servicios.gif" / border="0"></a></div>
  <div class="contenedorbtnpanel" align="center"><a href="editar.php?id_administrador=<?php echo  $check["id_administrador"]; ?>"><img src="../../images/btn/editar_servicios.gif" alt="" / border="0" /></a></div>
  <div class="contenedorbtnpanel" align="center"><a href="eliminar.php?id_administrador=<?php echo  $check["id_administrador"]; ?>"><img src="../../images/btn/eliminar_servicios.gif" alt="" / border="0" /></a></div>
  <div class="contenedorbtnpanel" align="center"></div>
  <div class="contenedorbtnpanel" align="center"><a href="../index.php?id_administrador=<?php echo  $check["id_administrador"]; ?>"><br />
    <img src="../../images/btn/volver.gif" alt="" / border="0" /></a></div>
  
  </div>

</div>
</body>

</html>

<?php 
}
?>