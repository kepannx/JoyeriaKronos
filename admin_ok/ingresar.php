<?php 
session_start();
require_once('../../Connections/ecosesa.php');
$session=session_id();
$error="./administrador/index.php?mensaje=error";
$id_administrador=$_GET["id_administrador"];
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
	<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=200,width=300');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../style.css" />
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../ckeditor.js"></script>
<script src="sample.js" type="text/javascript"></script>
<script src="../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="sample.css" rel="stylesheet" type="text/css" />
<link href="../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyintro">
  <div class="separador"></div>
  <div class="contenedorpanel">Panel Hojas de vida/<font color="#CC0000"><b><?php echo $check["nombre"];?></b></font>| <a href="upload.form.php" onclick="return popitup('upload.form.php')"
	>Subir Imagen</a><br />
    <form action="ingreso.php" method="post">
    <div class="contenedorfrm">
    	<div id="contenidoform">Nombre y Apellido</div>
       <span id="sprytextfield5">
        <label>
            <input type="text" name="nombre" id="nombre" />
        </label></span>
        <div id="contenidoform">Correo Electronico</div>
        <span id="sprytextfield6">
        <label>
          <input type="text" name="correo" id="correo" />
        </label>
     </span> </div>
    <div class="contenedorfrm">
      <div id="contenidoform">Documento</div>
      <span id="sprytextfield8">
      <label>
        <input type="text" name="contrasena" id="contrasena" />
      </label>
      </span> 
      
      <div id="contenidoform">Programa</div>
      <label>
	    <select name="programa" id="programa">
       		      <option>Seleccione</option>
       		     <?php 
				 $sqlprograma="SELECT * FROM programas";
				 $queryprogramas=mysql_db_query($database_ecosesa,$sqlprograma,$ecosesa);
			 while($programa=mysql_fetch_array($queryprogramas)){
				 ?>
                  <option value="<?php echo $programa["id_programa"];?>"><?php echo $programa["programa"];?></option>
                  <?php }?>
          </select>
	    </label>
      
      </div>
      <div class="contenedorfrm"><div id="contenidoform">Actualmente Trabaja?</div>
<span id="spryselect3">
<label>
  <select name="laborando" id="laborando">
    <option>Seleccione</option>
    <option value="si">Si</option>
    <option value="no">No</option>
  </select>
</label>
	    </span>
        <div id="contenidoform">Estado Actual</div>
        <label for="egresado"><select name="egresado" id="egresado">
          <option value="Si">Egresado</option>
          <option value="No">Estudiante</option>
        </select></label>
        </div>
      
       <div class="contenedorfrm"><b><font size="2">Perfil </font></b>| Salud Pública: 
         <input name="saludpublica" type="checkbox" value="saludpublica"  />
      |Enfermeria <input name="enfermeria" type="checkbox" value="enfermeria"  />
      | Servicios Farmacologicos 
      <input name="farmacia" type="checkbox" value="farmacia"  />| Salud Oral <input name="salud_oral" type="checkbox" value="salud_oral"  /> | Administrativo en Salud <input name="adminsalud" type="checkbox" value="adminsalud"  />
      </div>
      <div class="contenedorfrm2">
  <label for="hv">
				Descripcion:</label>
    <textarea class="ckeditor" cols="80" id="hv" name="hv" rows="10">ESCRIBA AQUI EL TEXTO PARA EL PROGRAMA</textarea>
    </div>
   
    <div class="contenedorfrm" align="center"><a href="index.php?id_administrador=<?php echo $_GET["id_administrador"];?>"><img src="../..//images/btn/volver.gif" border="0" /></a>
      | 
      <input name="" type="image" src="../../images/btn/guardar.gif" />
      <input name="id_administrador" type="hidden" id="id_administrador" value="<?php echo $_GET["id_administrador"]?>" />
    </div>

</form>
</div>
</div>
  <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
//-->
  </script>
</body>

</html>

<?php 
}
?>