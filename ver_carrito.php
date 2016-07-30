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
          
          <?php 
if($carro){
?>
    <div align="center"><span id="fuente2">COTIZACIÓN</span> (solo valido para Colombia)</div>
    <table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr bgcolor="#333333" class="tit"> 
    <td width="135">Producto</td>
    <td width="85" align="center">Valor Unidad</td>
    <td width="144" align="center">Valor Total</td>
    <td width="125" align="center">Cantidad de Unidades</td>
    <td width="53" align="center">Borrar</td>
    <td width="58" align="center">Actualizar</td>
  </tr>
  <?php
   $color=array("#ffffff","#F0F0F0");
  $contador=0;
  $suma=0;
   foreach($carro as $k => $v){
   $subto=$v['cantidad']*$v['valor'];
   $suma=$suma+$subto;
   $contador++;
    ?>
  <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
    <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
      <td><?php $id_producto=$v['id'];
	  
	  $sqlproducto="SELECT * FROM productos WHERE id='$id_producto'";
	  @$queryproducto=mysql_db_query($database_joyeria,$sqlproducto,$joyeria);
		$producto=mysql_fetch_array($queryproducto);
		
		echo $producto["producto"];
	  ?></td>
      <td align="center"><?php echo number_format($v['valor']) ?></td>
      <td align="center"><?php  $valortotal=$v['cantidad']*$v['valor']; echo number_format($valortotal); ?></td>
      <td align="center"><input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8" />        <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>" /></td>
      <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="images/trash.gif" width="12" height="14" border="0"></a></td>
      <td align="center"> 
        <input name="imageField" type="image" src="images/actualizar.gif" width="20" height="20" border="0"></td>
  </tr></form>
  <?php }?>
</table>
<div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); ?></span><br><br>

<form action="enviarproducto.php" method="post">
 <table width="720" border="0" align="center" cellpadding="0" cellspacing="0" >

    <tr>
      <td colspan="2" align="center">Para poder tomar  su pedido necesitamos algunos  datos</td>
      </tr>
    <tr align="left">
      <td width="234">Su nombre        </td>
      <td width="486"><span id="sprytextfield3">
        <label>
          <input type="text" name="nombre" id="nombre" />
        </label>
        <span class="textfieldRequiredMsg"><font color="#000000">Su nombre es necesario</font></span></span></td>
    </tr>
    <tr>
      <td  align="left">Su Correo</td>
      <td  align="left"><span id="sprytextfield2"><span class="textfieldRequiredMsg">Este dato es necesario</span><span id="sprytextfield4">
        <label>
          <input type="text" name="correo" id="correo" />
        </label>
        <span class="textfieldRequiredMsg"><font color="#000000">Correo</font></span></span></span></td>
    </tr>
    <tr>
      <td  align="left">Su Ciudad</td>
      <td  align="left"><span id="sprytextfield5">
        <label>
          <input type="text" name="ciudad" id="ciudad" />
        </label>
        <span class="textfieldRequiredMsg"><font color="#000000">Su ciudad </font></span></span></td>
    </tr>
    <tr>
      <td  align="left">Su Teléfono</td>
      <td  align="left"><span id="sprytextfield6">
        <label>
          <input type="text" name="telefono" id="telefono" />
        </label>
        <span class="textfieldRequiredMsg"><font color="#000000">Telefono</font></span></span></td>
    </tr>
    <tr>
      <td  align="left">Su Direccion</td>
      <td  align="left"><span id="sprytextfield7">
        <label>
          <input type="text" name="direccion" id="direccion" />
        </label>
        <span class="textfieldRequiredMsg"><font color="#000000">Direccion.</font></span></span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="image" name="imageField2" id="imageField" src="images/enviar.gif" />
        <input name="envio" type="hidden" id="envio" value=" &lt;table width='489' border='0' cellspacing='0' cellpadding='0' align='center'&gt;
  &lt;tr&gt; 
    &lt;td width='135'&gt;Producto&lt;/td&gt;
    &lt;td width='85' align='center'&gt;Valor Unidad&lt;/td&gt;
    &lt;td width='144' align='center'&gt;Valor Total&lt;/td&gt;
    &lt;td width='125' align='center'&gt;Cantidad de Unidades&lt;/td&gt;
  &lt;/tr&gt;
  <?php
   
  $contador=0;
  $suma=0;
   foreach($carro as $k => $v){
   $subto=$v['cantidad']*$v['valor'];
   $suma=$suma+$subto;
   $contador++;
    ?>
  
    &lt;tr&gt; 
      &lt;td&gt;<?php $id_producto=$v['id'];
	  
	  $sqlproducto="SELECT * FROM productos WHERE id='$id_producto'";
	  @$queryproducto=mysql_db_query($database_joyeria,$sqlproducto,$joyeria);
		$producto=mysql_fetch_array($queryproducto);
		
		echo $producto['referencia'];
	  ?>&lt;/td&gt;
      &lt;td align='center'&gt;<?php echo $v['valor'] ?>&lt;/td&gt;
      &lt;td align='center'&gt;<?php echo $v['cantidad']*$v['valor']; ?>&lt;/td&gt;
      &lt;td align='center'&gt;<?php echo $v['id'] ?>&lt;/td&gt;
  &lt;/tr&gt;
  <?php }?>
&lt;/table&gt;
        
        
        
        
        
        " />
      </label></td>
      </tr>
    <tr>
      <td colspan="2" align="center"></td>
      </tr>
    <tr>
      <td colspan="2" align="center"><span class="prod">
       
      </td>
    </tr>

 </table>
</form>

</div>
<div align="center"><span class="prod">Continuar la selección de productos</span> 
  <a href="productos.php<?php echo SID;?>"><img src="images/continuar.gif" width="13" height="13" border="0"></a> 
</div>
<?php }else{ ?>
<p align="center"> <span class="prod">No hay productos seleccionados
</span> <a href="catalogo.php?<?php echo SID;?>"><img src="images/continuar.gif" width="13" height="13" border="0"></a> 
  <?php }?>
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