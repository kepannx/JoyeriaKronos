<?php 
require_once("Connections/joyeria.php");
require_once("libreria/txt.php");
require_once("libreria/carrito.php");
$id=$_GET["id"];
$sql="SELECT * FROM productos WHERE id='$id'";
@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
$producto=mysql_fetch_array($query);
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
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
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
   		    Productos</div>
   		  <div class="contenedorsubpro">
		  	<div id="titulo003"><?php echo $producto["producto"];?></div><div id="contenedorpropiedadesproducto"><div class="contenedorimagen">
            
            <a href="images/productos/<?php echo $producto["imagen"]; ?>" rel="lightbox[guia]" ><img src="images/productos/<?php echo $producto["imagen"]; ?>" width="220" height="203" border="0" /></a><a href="images/productos/<?php echo $producto["imagen"]; ?>" rel="lightbox" ></a>
            
            
            </div>
            <div id="contprop003">
            	<div id="contenedorpropiedad1">Material:</div>
            <div id="contenedortxtpropiedad1" align="right"><?php echo $producto["material"];?></div>
            
            <div id="contenedorpropiedad1">Ref:</div>
            <div id="contenedortxtpropiedad1" align="right"><?php echo $producto["referencia"];?></div>
            
            <div id="contenedorpropiedad1">Valor:</div>
            <div id="contenedortxtpropiedad1" align="right"><?php echo $producto["valor"];?></div>
            
            <?php
	if(!$carro || !isset($carro[md5($producto['id'])]['identificador']) || $carro[md5($producto['id'])]['identificador']!=md5($producto['id'])){
	?>
            <div class="contenedorimagen"><a href="agregacar.php?<?php echo SID ?>&id=<?php echo $producto['id']; ?>"><img src="images/addcarrito.gif" border="0" /></a></div><?php } else {?><div class="contenedorimagen"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $producto['id']; ?>"><img src="images/eliminarcarrito.gif" border="0" /></a></div><?php } ?>
            
            
            </div>
            
            </div>
            
		  	<?php echo $producto["descripcion"];?>
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
//-->
</script>
</body>
</html>