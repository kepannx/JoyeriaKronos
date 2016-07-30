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
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
<div class="contenedorcuerpo">
	<div id="contenedorcuerpo">
    
    <div class="contenedorindexbase">
    	<div class="contenedorproductoindex">
   		  <div class="contenedorsubtitle">
   		    Contactenos</div>
   		  <div class="contenedorsubpro">
   		    <form action="contacto.php" method="post">
            <p>&nbsp;</p>
            <p>Puede contacternos en nuestra Linea Unica (57-4) 448 81 85, ubicarnos también en             <a href="puntos_de_venta.php"><font color="#333333"><b>nuestras sedes</b> </font> </a>, o contactarnos por medio del siguiente formulario:
              <br />
            </p>
            <p>&nbsp;</p>
            <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" >
   		      <tr align="left">
   		        <td width="142">Su nombre </td>
   		        <td width="308"><span id="sprytextfield2">
   		          <label>
   		            <input type="text" name="nombre" id="nombre" />
	              </label>
	            <span class="textfieldRequiredMsg"><font color="#000000">Su nombre</font></span></span></td>
	          </tr>
   		      <tr>
   		        <td  align="left">Su Correo</td>
   		        <td  align="left"><span id="sprytextfield8">
   		          <label>
   		            <input type="text" name="correo" id="correo" />
	              </label>
	            <span class="textfieldRequiredMsg"><font color="#000000">Su Correo</font></span></span></td>
	          </tr>
   		      <tr>
   		        <td  align="left">Comentario</td>
   		        <td  align="left"><span id="sprytextarea1">
   		          <label>
   		            <textarea name="textarea1" id="textarea1" cols="45" rows="5"></textarea>
	              </label>
	            <span class="textareaRequiredMsg"><font color="#000000">Comentario</font></span></span></td>
	          </tr>
   		      <tr>
   		        <td colspan="2" align="center"><label>
   		          <input type="image" name="imageField2" id="imageField" src="images/enviar.gif" />
   		        </label></td>
	          </tr>
   		      <tr>
   		        <td colspan="2" align="center"></td>
	          </tr>
   		      <tr>
   		        <td colspan="2" align="center"><span class="prod"></td>
	          </tr>
	        </table>
            </form>
	  </div></div>
    </div>
  
  

    	<div class="contenedorcolumnaizquierdo">
    	  <?php include_once("libreria/mostrador1.php"); ?>
    	  <div class="contenedor200x100">
    	    <?php include("libreria/chat.php"); ?>
    	  </div>
            
   	  </div>
            
</div>
</div>

</div>

<div class="pie">
	<div id="pie">
	  <div class="contenedorimages">
      <a href="index.php"><br />
     <img src="images/logo.jpg" width="393" height="73" border="0" /></a><br /><?php echo $textopie1; ?></div>
      
   	  <div id="contenedorbtnpies" align="right"><?php echo $links; ?></div>
      
  </div>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
swfobject.registerObject("FlashID2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>