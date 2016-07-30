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
   		  <br />
   		  <div class="contenedorsubpro3">
          	<p>Joyeria kronos te ofrece la oportunidad de trabajar con nosotros desde tu casa. Aumenta tus ingresos con vendedoras infinitas y se parte de nuestra gran familia kronos. 
Mayor informacion en 448 81 8 opcion 7 </p>
          	<form action="enviar.php" method="POST">
<table width="713" border="0">
<tr><table width="713" border="0">
    <tr>
      <td width="94">Nombre y Apellido</td>
      <td width="254"><span id="sprytextfield2">
        <label for="nombre"></label>
        <input type="text" name="nombre" id="nombre" />
        <span class="textfieldRequiredMsg">Su nombre es necesario</span></span></td>
      <td width="101">Cedula</td>
      <td width="236"><span id="sprytextfield3">
        <label for="cedula"></label>
        <input type="text" name="cedula" id="cedula" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Cedula de</td>
      <td><span id="sprytextfield4">
        <label for="cedula"></label>
        <input type="text" name="lugarcedula" id="cedula" />
        <span class="textfieldRequiredMsg">De donde es su cedula?</span></span></td>
      <td>Fecha de nacimiento</td>
      <td><span id="sprytextfield5">
        <label for="fechanacimiento"></label>
        <input type="text" name="fechanacimiento" id="fechanacimiento" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Direccion de domicilio</td>
      <td><span id="sprytextfield6">
        <label for="direccion"></label>
        <input type="text" name="direccion" id="direccion" />
        <span class="textfieldRequiredMsg">direccion_domicilio</span></span></td>
      <td>Barrio</td>
      <td><span id="sprytextfield7">
        <label for="barrio"></label>
        <input type="text" name="barrio" id="barrio" />
        <span class="textfieldRequiredMsg">Barrio.</span></span></td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><span id="sprytextfield8">
        <label for="telefono"></label>
        <input type="text" name="telefono" id="telefono" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>Empresa</td>
      <td><span id="sprytextfield9">
        <label for="empresa"></label>
        <input type="text" name="empresa" id="empresa" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Direccion</td>
      <td><span id="sprytextfield10">
        <label for="direccion"></label>
        <input type="text" name="direccion2" id="direccion" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>Telefono</td>
      <td><span id="sprytextfield11">
        <label for="telefono_empresa"></label>
        <input type="text" name="telefono_empresa" id="telefono_empresa" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Cargo</td>
      <td><span id="sprytextfield12">
        <label for="cargo"></label>
        <input type="text" name="cargo" id="cargo" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>Tiempo Laborado</td>
      <td><span id="sprytextfield13">
        <label for="tiempo_laborado"></label>
        <input type="text" name="tiempo_laborado" id="tiempo_laborado" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Calidad</td>
      <td><span id="spryselect1">
        <label for="calidaddetrabajo"></label>
        <select name="calidaddetrabajo" id="calidaddetrabajo">
          <option value="Fijo">Fijo</option>
          <option value="Temporal">Temporal</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>Celular</td>
      <td><span id="sprytextfield14">
        <label for="celular"></label>
        <input type="text" name="celular" id="celular" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="31" colspan="4" align="center">REFERENCIAS COMERCIALES</td>
    </tr>
    <tr>
      <td height="31" colspan="4" align="center"><table width="444">
        <td height="31">Nombre del Establecimiento</td>
          <td width="228">Telefono</td>
        <tr>
          <td height="31"><span id="sprytextfield18">
            <label>
              <input type="text" name="establecimiento1" id="establecimiento1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield19">
            <label>
              <input type="text" name="telefonoestablecimiento1" id="telefonoestablecimiento1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield20">
            <label>
              <input type="text" name="establecimiento2" id="establecimiento2">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield21">
            <label>
              <input type="text" name="telefonoestablecimiento2" id="telefonoestablecimiento2">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield22">
            <label>
              <input type="text" name="establecimiento3" id="establecimiento3">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield23">
            <label>
              <input type="text" name="telefonoestablecimiento3" id="telefonoestablecimiento3">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="establecimiento4" id="establecimiento4">
          </label></td>
          <td><span id="sprytextfield24">
            <label>
              <input type="text" name="telefonoestablecimiento4" id="telefonoestablecimiento4">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="establecimiento5" id="establecimiento5">
          </label></td>
          <td><label>
            <input type="text" name="telefonoestablecimiento5" id="telefonoestablecimiento5">
          </label></td>
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
          <td height="31"><span id="sprytextfield">
            <label>
              <input type="text" name="pariente1" id="nombrepariente">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield28">
            <label>
              <input type="text" name="parentesco1" id="parentesco1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield15">
            <label>
              <input type="text" name="telefonopariente1" id="telefonopariente1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield16">
            <label>
              <input type="text" name="pariente2" id="establecimiento7">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield29">
            <label>
              <input type="text" name="pariente3" id="pariente2">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield17">
            <label>
              <input type="text" name="telefonopariente2" id="telefonoestablecimiento7">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield25">
            <label>
              <input type="text" name="pariente3" id="establecimiento8">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield30">
            <label>
              <input type="text" name="parentesco3" id="pariente3">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield26">
            <label>
              <input type="text" name="telefonopariente3" id="telefonoestablecimiento8">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="pariente4" id="establecimiento9">
          </label></td>
          <td><label>
            <input type="text" name="parentesco4" id="pariente4">
          </label></td>
          <td><span id="sprytextfield27">
            <label>
              <input type="text" name="telefonopariente4" id="telefonoestablecimiento9">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="pariente5" id="establecimiento10">
          </label></td>
          <td><label>
            <input type="text" name="parentesco5" id="pariente5">
          </label></td>
          <td><label>
            <input type="text" name="telefonopariente5" id="telefonoestablecimiento10">
          </label></td>
        </table></td>
    </tr>
    <tr>
      <td height="31" colspan="4" align="center">DATOS DE CONYUGUE</td>
    </tr>
    <tr>
      <td height="31" colspan="4" align="center"><table>
        <tr>
          <td width="81" height="31" align="center">Nombre</td>
          <td width="146" align="center"><label>
            <input type="text" name="nombreconyugue" id="nombreconyugue">
          </label></td>
          <td width="74" align="center">Cedula</td>
          <td width="144" align="center"><label>
            <input type="text" name="cedulaconyugue" id="cedulaconyugue">
          </label></td>
          <td width="238" align="center">Cedula de</td>
          <td width="238" align="center"><label>
            <input type="text" name="ceduladeconyuguede" id="ceduladeconyuguede">
          </label></td>
        <tr>
          <td height="31" align="center">Fecha de nacimiento</td>
          <td align="center"><label>
            <input type="text" name="fechanacimientoconyugue" id="fechanacimientoconyugue">
          </label></td>
          <td align="center">Direccion</td>
          <td align="center"><label>
            <input type="text" name="direccionconyugue" id="direccionconyugue">
          </label></td>
          <td align="center">Celular</td>
          <td align="center"><label>
            <input type="text" name="celularconyugue" id="celularconyugue">
          </label></td>
        <tr>
          <td height="31" align="center">Telefono</td>
          <td align="center"><label>
            <input type="text" name="telefonoconyugue" id="telefonoconyugue">
          </label></td>
          <td align="center">Cargo</td>
          <td align="center"><label>
            <input type="text" name="cargoconyugue" id="cargoconyugue">
          </label></td>
          <td align="center">Tiempo Laborado</td>
          <td align="center"><label>
            <input type="text" name="tiempolaboradoconyugue" id="tiempolaboradoconyugue">
          </label></td>
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
          <td width="146" align="center"><label>
            <input type="text" name="nombrepadre" id="nombrepadre">
          </label></td>
          <td width="74" align="center">Cedula</td>
          <td width="144" align="center"><label>
            <input type="text" name="cedulapadre" id="cedulapadre">
          </label></td>
          <td width="238" align="center">Cedula de</td>
          <td width="238" align="center"><label>
            <input type="text" name="cedulapadre" id="cedulapadre">
          </label></td>
        <tr>
          <td height="31" align="center">Fecha de nacimiento</td>
          <td align="center"><label>
            <input type="text" name="fechanacimientopadre" id="fechanacimientopadre">
          </label></td>
          <td align="center">Direccion</td>
          <td align="center"><label>
            <input type="text" name="direcciopadre" id="direcciopadre">
          </label></td>
          <td align="center">Celular</td>
          <td align="center"><label>
            <input type="text" name="celularpadre" id="celularpadre">
          </label></td>
        <tr>
          <td height="31" align="center">Telefono</td>
          <td align="center"><label>
            <input type="text" name="telefonopadre" id="telefonopadre">
          </label></td>
          <td align="center">Cargo</td>
          <td align="center"><label>
            <input type="text" name="cargopadre" id="cargopadre">
          </label></td>
          <td align="center">Tiempo Laborado</td>
          <td align="center"><label>
            <input type="text" name="tiempolaboradopadre" id="tiempolaboradopadre">
          </label></td>
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
            <label>
              <input type="text" name="pariente1" id="nombrepariente">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield28">
            <label>
              <input type="text" name="parentesco1" id="parentesco1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield15">
            <label>
              <input type="text" name="telefonopariente1" id="telefonopariente1">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield16">
            <label>
              <input type="text" name="pariente2" id="establecimiento7">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield29">
            <label>
              <input type="text" name="pariente3" id="pariente2">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield17">
            <label>
              <input type="text" name="telefonopariente2" id="telefonoestablecimiento7">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><span id="sprytextfield25">
            <label>
              <input type="text" name="pariente3" id="establecimiento8">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield30">
            <label>
              <input type="text" name="pariente4" id="pariente3">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><span id="sprytextfield26">
            <label>
              <input type="text" name="telefonopariente3" id="telefonoestablecimiento8">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="pariente4" id="establecimiento9">
          </label></td>
          <td><label>
            <input type="text" name="pariente5" id="pariente4">
          </label></td>
          <td><span id="sprytextfield27">
            <label>
              <input type="text" name="telefonopariente4" id="telefonoestablecimiento9">
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        <tr>
          <td height="31"><label>
            <input type="text" name="pariente5" id="establecimiento10">
          </label></td>
          <td><label>
            <input type="text" name="pariente6" id="pariente5">
          </label></td>
          <td><label>
            <input type="text" name="telefonopariente5" id="telefonoestablecimiento10">
          </label></td>
        </table>
<input type="submit" name="enviar" id="enviar" value="enviar">
</table>
</form>
   		  </div>
    	</div>
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