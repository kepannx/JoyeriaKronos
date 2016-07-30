<?php if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 9;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_joyeria, $joyeria);

 $query_Recordset1 = "SELECT * FROM productos WHERE categoria='$id_categoria'  AND  marca = '$id_marca'";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $joyeria) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);


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
<div class="contenedorcuerpo2">
	<div id="contenedorcuerpo2">
    
    <div class="contenedorindexbase2">
    	<div class="contenedorproductoindex2">
   		  <div class="contenedorsubtitle">
   		    Productos</div>
   		  <br />
   		  <div class="contenedorsubpro2">
          
        <?php if($row_Recordset1==NULL){ echo "<div class='contenedoradvertencia' align='center'><a hfer='javascript:history.back(1)'>Actualmente no hay productos en relojes</a></div>";} else {?>
 <?php do { ?>
            <div id="contprod" align="center">
            	<div id="contimg">
                	<a href="ver_producto.php?id=<?php echo $row_Recordset1["id"];?>"><img src="images/productos/<?php echo $row_Recordset1["imagen"];?>" width="100" height="92"  border="0"/></a>
                </div>
                <div id="conttitulo"><a href="ver_producto.php?id=<?php echo $row_Recordset1["id"];?>"><?php echo $row_Recordset1["producto"];?></a></div>
                <div id="conttxtdes">
                	<div id="conttxtdesint" align="left"><b><div id="conttxt001">Material</div>
                	  <div id="conttxt002" align="right"><?php echo $row_Recordset1["material"];?></div></b></div>
                    <div id="conttxtdesint" align="left"><b>
                    <div id="conttxt001">Ref</div>
                    <div id="conttxt002" align="right"><?php echo $row_Recordset1["referencia"];?></div></b></div>
                    <div id="conttxtdesint" align="left"><b>
                    <div id="conttxt001">Valor</div>
                    <div id="conttxt002" align="right"><font color="#990000">$CO<?php echo $row_Recordset1["valor"];?></font></div></b></div>
                </div>
            </div>
             <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); } ?>
            
            
   		  </div>
    	</div>
    </div>
  
  

    	<div class="contenedorcolumnaizquierdo2">
        <div class="contenedortitulos01" align="center">Categorias</div>
        
          <?php 
				$sql="SELECT * FROM categorias";
				@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
				while($categoria=mysql_fetch_array($query)){
			?>
          <div id="contenedortxt">
           	<div id="iconocont"><img src="images/icono.gif" /></div>
           	<a href="ver_categoria.php?id_categoria=<?php echo $categoria["id_categoria"]; ?>">  <div id="txtder"><?php echo $categoria["categoria"];?></div></a>
            </div>
        <?php } ?>
        	
          <!--aqui-->
        
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
      <a href="index.php"><img src="images/logo.jpg" width="393" height="73" border="0" /></a><br /><?php echo $textopie1; ?></div>
      
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