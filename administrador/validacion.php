<?php session_start();
require_once("../Connections/joyeria.php");
@$usuario=$_POST["usuario"];
@$contrasena=$_POST["contrasena"];
$ir="../admin_ok/index.php";
$regreso="index.php?mensaje=no";
if(!$usuario==NULL){
$sql="SELECT * FROM administrador WHERE usuario='$usuario' AND contrasena='$contrasena'";
@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
$fetch=mysql_fetch_array($query);

if($fetch["usuario"]==NULL){ 

header("Location: ". $regreso);}
else {
	 session_start();
	 $session=session_id();
	  $coduser=$fetch["id_administrador"];
	  $sqlsession="UPDATE administrador SET validacion='$session' WHERE id_administrador='$coduser'";
	  $queryses=mysql_db_query($database_joyeria,$sqlsession,$joyeria);

	header("Location: ". $ir."?id_administrador=".$coduser);}
	}
else {

header("Location: ". $regreso);}
?>