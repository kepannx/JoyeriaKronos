<?php 
require_once("Connections/joyeria.php");
require_once("libreria/txt.php");
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
        <div id="contenedorcarrito"><img src="images/vacio.gif"  align="left"/> <b>Actualmente Usted Tiene 0 Productos</b></div>
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
	<div id="contenedorbuscador"><div id="contenedorredes"><br />
    Siganos en:<img src="images/facebook.gif" border="0" align="texttop" /></div>
    	<div id="contenedorbusqueda">
        	<div id="txtbuscador">	<br /><br />
       	    Que desea Encontrar? </div>
            <div id="contenedortextfield">
              <?php include_once("libreria/buscador.php"); ?>
            </div>
        </div>
    </div>
</div>
<div class="contenedorcuerpo">
	<div id="contenedorcuerpo">
    	<div class="contenedorcolumnaizquierdo">
        	<div class="contenedortitulos01" align="center"><br />
       	    Categorias</div>
   	     <div class="separador1"></div>
   	      <?php include("libreria/categorias.php"); ?>
      <div class="contenedortitulos01" align="center"><br />
       	    Servicios</div>
            <div class="separador1"></div>
      <?php include_once("libreria/servicios.php"); ?>
            <div class="contenedor200x100">
            	<img src="images/asesorenlinea.jpg" />
            </div> 
            
            
           <div class="contenedortitulos01" align="center"><br />
       	    Producto Especial</div>
            
            
            <div id="contenedorimagenproducto1" align="center">
            	<img src="images/productos/anillo.jpg" />
            
            </div>
            <div class="contenedortitulos02" align="center">Producto A</div>
          <div class="contenedorpropiedades1">
           	<div id="contenedorpropiedades1"><div id="contenedorpropiedad1">Material</div>
            <div id="contenedortxtpropiedad1" align="right">sss</div></div>
            
            <div id="contenedorpropiedades1">
              <div id="contenedorpropiedad1">Peso</div>
            <div id="contenedortxtpropiedad1" align="right">sss</div></div>
            
            <div id="contenedorpropiedades1">
              <div id="contenedorpropiedad1">Valor</div>
            <div id="contenedortxtpropiedad1" align="right"><font color="#990000"><b>sss</b></font></div></div>
            <div class="contenedorvercatalogo"><img src="images/ver_catalogo.jpg" border="0" /></div>
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
//-->
</script>
</body>
</html>