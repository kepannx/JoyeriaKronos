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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
   		    Carrito de Compras </div>
   		  <div class="contenedorsubpro">
   		    <p>&nbsp;</p>
   		    <p align="center">
   		      <?php 
				
				$nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		$ciudad=$_POST["ciudad"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$contenido=$_POST["envio"];
		$email='joyeriakronos@une.net.co';
		
		
	
$mensaje='<table width="550" height="128" border="0">
          
            <tr>
              <td width="92" height="14" align="left" valign="top"><p><font face="Georgia, Times New Roman, Times, serif"><font size="-2"><font face="Verdana, Arial, Helvetica, sans-serif">Nombre</font></font></font></p></td>
              <td width="448" height="14" align="left" valign="top" ><p><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$nombre.'</font></font></p></td>
            </tr>
            <tr>
              <td width="92" height="20" align="left" valign="middle"><p><font face="Georgia, Times New Roman, Times, serif"><font size="-2"><font face="Verdana, Arial, Helvetica, sans-serif">Correo</font></font></font></p></td>
              <td width="448" height="20" align="left" valign="middle"><p><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$correo.'</font></font></p></td>
            </tr>
            <tr>
              <td height="20" align="left" valign="middle">Ciudad</td>
              <td height="20" align="left" valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$ciudad.'</font></font></td>
            </tr>
            <tr>
              <td height="20" align="left" valign="middle">Telefono</td>
              <td height="20" align="left" valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$telefono.'</font></font></td>
            </tr>
            <tr>
              <td height="20" align="left" valign="middle">Direccion</td>
              <td height="20" align="left" valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="-2">'.$nombre.'</font></font></td>
            </tr>
            <tr>
              <td height="20" align="left" valign="middle">&nbsp;</td>
              <td height="20" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table>
<p>Pedido:</p>
<p>'.$contenido.'</p>';

			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Joyeria Kronos < joyeriakronos@une.net.co >' . "\r\n";
if(mail ("$nombre < $email >", "Cotizacion Joyeria Kronos",$mensaje,$cabeceras)){
	echo "Su Cotizacion ha sido enviada con exito, pronto nos contactaremos con usted";
} else {
	echo "No se pudo realizar  la cotizacion.  intente de nuevo.";
	}

						?>
            
          </div>
    	</div>
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
//-->
</script>
</body>
</html>