<?php 
session_start();
require_once('../../Connections/ecosesa.php');
$session=session_id();
$error="./administrador/index.php?mensaje=error";
$id_administrador=$_POST["id_administrador"];
$sql="SELECT * FROM administrador WHERE id_administrador='$id_administrador' AND validacion='$session'";
@$query=mysql_db_query($database_ecosesa,$sql,$ecosesa);
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
	<link rel="stylesheet" type="text/css" href="../style.css" />
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../ckeditor.js"></script>
<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyintro">
  <div class="separador"></div>
  <div class="contenedorpanel">Panel Hojas de vida/<font color="#CC0000"><b><?php echo $check["nombre"];?></b></font><br />
    <br /><br />
<div class="contenedorfrm2" align="center">
      
      <?php 
	  

		
		 
      $nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		
		$contrasena=md5($_POST["contrasena"]);
		@$saludpublica=$_POST["saludpublica"]." ";
		@$enfermeria=$_POST["enfermeria"]." ";
		@$farmacia=$_POST["farmacia"]." ";
		@$salud_oral=$_POST["salud_oral"]." ";
		@$adminsalud=$_POST["adminsalud"]." ";
		$hv=$_POST["hv"];
		$programa=$_POST["programa"];
		$laborando=$_POST["laborando"];
		$documento=$_POST["contrasena"];
		 $egresado=$_POST["egresado"];
		$user1=substr($nombre,0,3);
		$user2=substr($documento,-4);
		 
		
		$sqlingreso="INSERT INTO alumno SET nombre='$nombre', hv='".$hv."', correo='$correo', usuario='$user1$user2', contrasena='$contrasena', enfermeria='$enfermeria', farmacia='$farmacia', salud_oral='$salud_oral', adminsalud='$adminsalud', saludpublica='$saludpublica', programa='$programa', laborando='$laborando', documento='$documento', egresado='$egresado'";
		if(@$queryingreso=mysql_db_query($database_ecosesa,$sqlingreso,$ecosesa)){
			
		
			echo "Sus datos se han ingresado con exito<br>
				Su usuario es:<b>".$user1, $user2."</b>
			";
			
			$mensaje='<table width="550" height="172" border="0">
            <tr>
              <td colspan="2" align="left" valign="middle" ><p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Hola:</font><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$nombre.' Sus datos se han ingresado con exito. puede acceder por la pagina de interner de ecosesa.com.co click en institucion educativa  opcion estudiantes.</font></font></p></td>
            </tr>
            <tr>
              <td width="470" height="80" align="left" valign="top"><p><font face="Georgia, Times New Roman, Times, serif"><font size="-2"><font face="Verdana, Arial, Helvetica, sans-serif">Usuario</font></font></font></p></td>
              <td width="470" height="80" align="left" valign="top" ><p><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$user1.''.$user2.'</font></font></p></td>
            </tr>
            <tr>
              <td width="470" height="20" align="left" valign="middle"><p><font face="Georgia, Times New Roman, Times, serif"><font size="-2"><font face="Verdana, Arial, Helvetica, sans-serif">Contraseña</font></font></font></p></td>
              <td width="470" height="20" align="left" valign="middle"><p><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">Su Documento de Identidad</font></font></p></td>
            </tr>
          </table>';

			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Ecosesa < mercadeo@ecosesa.com.co >' . "\r\n";
mail ("$nombre < $correo >", "Acceso  a  su zona de usuarios ecosesa",$mensaje,$cabeceras);
		
			
			}	
			else{
				
				echo "No se pudo ingresar el alumno, intentelo de nuevo<br>".mysql_error();
				}      



?>
      
    </div>
   
    <div class="contenedorfrm" align="center"><a href="javascript: history.go(-1)"><img src="../../images/btn/volver.gif" border="0" /></a></div>
</div>
</div>
  <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
  </script>
</body>

</html>

<?php 
}
?>