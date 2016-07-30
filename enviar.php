<?php 
require_once("Connections/joyeria.php");
require_once("libreria/txt.php");
require_once("libreria/carrito.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Joyeria Kronos</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body leftmargin="0" marginheight="0" marginwidth="0" topmargin="0" background="0" rightmargin="0" class="body">
<div class="cabezote">
	<div id="cabezote">
    	<div class="contenedorimages"><a href="index.php"><img src="images/logo.jpg" border="0" /></a></div>
         <?php require_once("libreria/cabezote.php"); ?>
    </div>
    <div class="botones">
    	<div id="botones">
    	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="930" height="40" id="FlashID" title="Joyerias en Medellin">
    	    <param name="movie" value="swf/botonera.swf" />
    	    <param name="quality" value="high" />
    	    <param name="wmode" value="transparent" />
    	    <param name="swfversion" value="6.0.65.0" />
    	    <!-- Joyerias. -->
    	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	    <!-- Joyerias en Medellin. -->
    	    <!--[if !IE]>-->
    	    <object type="application/x-shockwave-flash" data="swf/botonera.swf" width="930" height="40">
    	      <!--<![endif]-->
    	      <param name="quality" value="high" />
    	      <param name="wmode" value="transparent" />
    	      <param name="swfversion" value="6.0.65.0" />
    	      <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	      <!-- Joyeria Kronos. -->
    	      <div>
    	        <h4>Anillos Medellin</h4>
    	        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
  	        </div>
    	      <!--[if !IE]>-->
  	      </object>
    	    <!--<![endif]-->
  	    </object>
    	</div>
    </div>
</div>
<div class="contenedorbuscador">
	<?php require_once("libreria/media.php"); ?>
</div>
<div class="contenedorcuerpo2">
	<div id="contenedorcuerpo2">
    
    <div class="contenedorindexbase2">
    	<div class="contenedorproductoindex2">
   		  <div class="contenedorsubtitle">
   		    Trabaje Con Nosotros</div>
   		  <p><br />
	      </p>
   		  <p>&nbsp;</p>
   		 <div align="center"><?php 
		  
		  $nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$lugarcedula=$_POST["lugarcedula"];
$fechanacimiento=$_POST["fechanacimiento"];
$direccion=$_POST["direccion"];
$barrio=$_POST["barrio"];
$telefono=$_POST["telefono"];
$empresa=$_POST["empresa"];
$direccion2=$_POST["direccion2"];
$telefono_empresa=$_POST["telefono_empresa"];
$cargo=$_POST["cargo"];
$tiempo_laborado=$_POST["tiempo_laborado"];
$calidaddetrabajo=$_POST["calidaddetrabajo"];
$celular=$_POST["celular"];
$establecimiento1=$_POST["establecimiento1"];
$telefonoestablecimiento1=$_POST["telefonoestablecimiento1"];
$establecimiento2=$_POST["establecimiento2"];
$telefonoestablecimiento2=$_POST["telefonoestablecimiento2"];
$establecimiento3=$_POST["establecimiento3"];
$telefonoestablecimiento3=$_POST["telefonoestablecimiento3"];
$establecimiento4=$_POST["establecimiento4"];
$telefonoestablecimiento4=$_POST["telefonoestablecimiento4"];
$establecimiento5=$_POST["establecimiento5"];
$telefonoestablecimiento5=$_POST["telefonoestablecimiento5"];
$pariente1=$_POST["pariente1"];
$parentesco1=$_POST["parentesco1"];
$telefonopariente1=$_POST["telefonopariente1"];
$pariente2=$_POST["pariente2"];
$pariente3=$_POST["pariente3"];
$telefonopariente2=$_POST["telefonopariente2"];
$pariente3=$_POST["pariente3"];
$parentesco3=$_POST["parentesco3"];
$telefonopariente3=$_POST["telefonopariente3"];
$pariente4=$_POST["pariente4"];
$parentesco4=$_POST["parentesco4"];
$telefonopariente4=$_POST["telefonopariente4"];
$pariente5=$_POST["pariente5"];
$parentesco5=$_POST["parentesco5"];
$telefonopariente5=$_POST["telefonopariente5"];
$nombreconyugue=$_POST["nombreconyugue"];
$cedulaconyugue=$_POST["cedulaconyugue"];
$ceduladeconyuguede=$_POST["ceduladeconyuguede"];
$fechanacimientoconyugue=$_POST["fechanacimientoconyugue"];
$direccionconyugue=$_POST["direccionconyugue"];
$celularconyugue=$_POST["celularconyugue"];
$telefonoconyugue=$_POST["telefonoconyugue"];
$cargoconyugue=$_POST["cargoconyugue"];
$tiempolaboradoconyugue=$_POST["tiempolaboradoconyugue"];
$nombrepadre=$_POST["nombrepadre"];
$cedulapadre=$_POST["cedulapadre"];
$fechanacimientopadre=$_POST["fechanacimientopadre"];
$direcciopadre=$_POST["direcciopadre"];
$celularpadre=$_POST["celularpadre"];
$telefonopadre=$_POST["telefonopadre"];
$cargopadre=$_POST["cargopadre"];
$tiempolaboradopadre=$_POST["tiempolaboradopadre"];



$mensaje='

<table width="713" border="0">
<tr><table width="713" border="0">
  <tr>
    <td width="94">Nombre y Apellido</td>
    <td width="254">'.$nombre.'</td>
    <td width="101">Cedula</td>
    <td width="236">'.$cedula.'</td>
    </tr>
  <tr>
    <td>Cedula de</td>
    <td>'.$lugarcedula.'</td>
    <td>Fecha de nacimiento</td>
    <td>'.$fechanacimiento.'</td>
    </tr>
  <tr>
    <td>Direccion de domicilio</td>
    <td>'.$direccion.'</td>
    <td>Barrio</td>
    <td>'.$barrio.'</td>
    </tr>
  <tr>
    <td>Telefono</td>
    <td>'.$telefono.'</td>
    <td>Empresa</td>
    <td>'.$empresa.'</td>
    </tr>
  <tr>
    <td>Direccion</td>
    <td>'.$direccion2.'</td>
    <td>Telefono</td>
    <td>'.$telefono_empresa.'</td>
    </tr>
  <tr>
    <td>Cargo</td>
    <td>'.$cargo.'</td>
    <td>Tiempo Laborado</td>
    <td>'.$tiempo_laborado.'</td>
    </tr>
  <tr>
    <td>Calidad</td>
    <td>'.$calidaddetrabajo.'</td>
    <td>Celular</td>
    <td>'.$celular.'</td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center">REFERENCIAS COMERCIALES</td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center"><table width="444">
      <td height="31">Nombre del Establecimiento</td>
        <td width="228">Telefono</td>
        <tr>
          <td height="31">'.$establecimiento1.'</td>
          <td>'.$telefonoestablecimiento1.'</td>
          <tr>
            <td height="31">'.$establecimiento2.'</td>
            <td>'.$telefonoestablecimiento2.'</td>
            <tr>
              <td height="31">'.$establecimiento3.'</td>
              <td>'.$telefonoestablecimiento3.'</td>
            <tr>
              <td height="31">'.$establecimiento4.'</td>
              <td>'.$telefonoestablecimiento4.'</td>
            <tr>
              <td height="31">'.$establecimiento5.'</td>
              <td>'.$telefonoestablecimiento5.'</td>
          </table></td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center">REFERENCIAS PERSONALES</td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center"><table width="521">
      <tr>
        <td width="144" height="31" align="center">Nombre</td>
        <td width="152" align="center">Parentesco</td>
        <td width="209" align="center">Telefono</td>
        <tr>
          <td height="31">'.$pariente1.'</td>
          <td>'.$parentesco1.'</td>
          <td>'.$telefonopariente1.'</td>
          <tr>
            <td height="31">'.$pariente2.'</td>
            <td>'.$parentesco2.'</td>
            <td>'.$telefonopariente2.'</td>
            <tr>
              <td height="31">'.$pariente3.'</td>
              <td>'.$parentesco3.'</td>
              <td>'.$telefonopariente3.'</td>
            <tr>
              <td height="31">'.$pariente4.'</td>
              <td>'.$parentesco4.'</td>
              <td>'.$telefonopariente4.'</td>
            <tr>
              <td height="31">'.$pariente5.'</td>
              <td>'.$parentesco5.'</td>
              <td>'.$telefonopariente5.'</td>
        </table></td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center">DATOS DE CONYUGUE</td>
    </tr>
  <tr>
    <td height="31" colspan="4" align="center"><table>
      <tr>
        <td width="81" height="31" align="center">Nombre</td>
        <td width="146" align="center">'.$nombreconyugue.'</td>
        <td width="74" align="center">Cedula</td>
        <td width="144" align="center">'.$cedulaconyugue.'</td>
        <td width="238" align="center">Cedula de</td>
        <td width="238" align="center">'.$ceduladeconyuguede.'</td>
        <tr>
          <td height="31" align="center">Fecha de nacimiento</td>
          <td align="center">'.$fechanacimientoconyugue.'</td>
          <td align="center">Direccion</td>
          <td align="center">'.$direccionconyugue.'</td>
          <td align="center">Celular</td>
          <td align="center">'.$celularconyugue.'</td>
          <tr>
            <td height="31" align="center">Telefono</td>
            <td align="center">'.$telefonoconyugue.'</td>
            <td align="center">Cargo</td>
            <td align="center">'.$cargoconyugue.'</td>
            <td align="center">Tiempo Laborado</td>
            <td align="center">'.$tiempolaboradoconyugue.'</td>
            <tr>
              <td height="25" colspan="6" align="center">DATOS DE PADRE O MADRE</td>
        </table></td>
    </tr>
  <tr>
    
    </tr>
  <tr>
    <td height="242" colspan="4" align="center">
      <table>
        <tr>
          <td width="81" height="31" align="center">Nombre</td>
          <td width="146" align="center">'.$nombrepadre.'</td>
          <td width="74" align="center">Cedula</td>
          <td width="144" align="center">'.$cedulapadre.'</td>
          <td width="238" align="center">Cedula de</td>
          <td width="238" align="center">&nbsp;</td>
          <tr>
            <td height="31" align="center">Fecha de nacimiento</td>
            <td align="center">'.$fechanacimientopadre.'</td>
            <td align="center">Direccion</td>
            <td align="center">'.$direcciopadre.'</td>
            <td align="center">Celular</td>
            <td align="center">'.$celularpadre.'</td>
            <tr>
              <td height="31" align="center">Telefono</td>
              <td align="center">'.$telefonopadre.'</td>
              <td align="center">Cargo</td>
              <td align="center">'.$cargopadre.'</td>
              <td align="center">Tiempo Laborado</td>
              <td align="center">'.$tiempolaboradopadre.'</td>
            <tr>
              <td height="21" colspan="6" align="center">&nbsp;</td>
            <tr>
              <td height="21" colspan="6" align="center"></td>
          </table>
      </td>
    </tr>
  </table>
  
  <table>
    </table>
  <table>
    <table width="521">
      <tr>
        <td width="144" height="31" align="center">Nombre</td>
        <td width="152" align="center">Parentesco</td>
        <td width="209" align="center">Telefono</td>
        <tr>
          <td height="31"><span id="sprytextfield">
            
          </td>
          <td><span id="sprytextfield28">
           
          </td>
          <td><span id="sprytextfield15">
           
          </td>
        <tr>
          <td height="31"><span id="sprytextfield16">
            
            </td>
          <td><span id="sprytextfield29">
           
            </td>
          <td><span id="sprytextfield17">
            
            </td>
        <tr>
          <td height="31"><span id="sprytextfield25">
            
            </td>
          <td><span id="sprytextfield30">
            
            </td>
          <td><span id="sprytextfield26">
            
            </td>
        <tr>
          <td height="31"></td>
          <td></td>
          <td><span id="sprytextfield27">
            
            </td>
        <tr>
          <td height="31"></td>
          <td></td>
          <td></td>
        </table>
    </table>

			
';
$email="joyeriakronos@une.net.co";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Joyeria Kronos < joyeriakronos@une.net.co >' . "\r\n";
if(mail ("$nombre < $email >", "Envio formulario vendedoras infinitas",$mensaje,$cabeceras)){
	echo "Su formulario ha sido enviado con exito, pronto nos contactaremos con usted";
} else {
	echo "No se pudo enviar el formulario.  intente de nuevo.";
	}

						?></div> </div>
    </div>
  
  

    	<div class="contenedorcolumnaizquierdo2">
        
          <!--aqui-->
        
    	  <?php include_once("libreria/mostrador1.php"); ?>
    	  <div class="contenedor200x100">
    	  
    	  </div>
            
   	  </div>
            
</div>
    </div>

</div>

<div class="pie">
	<div id="pie">
	  <div class="contenedorimages">
      <a href="index.php"><br />
      <a href="index.php"><img src="images/logo.jpg" width="393" height="73" border="0" /></a><br /><?php echo $textopie1; ?></div>
      
   	  <div id="contenedorbtnpies" align="right"><?php echo $links; ?></div>
      
  </div>
</div>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16");
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17");
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18");
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19");
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20");
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23");
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24");
var sprytextfield28 = new Spry.Widget.ValidationTextField("sprytextfield28");
var sprytextfield29 = new Spry.Widget.ValidationTextField("sprytextfield29");
var sprytextfield30 = new Spry.Widget.ValidationTextField("sprytextfield30");
</script>
</body>
</html>