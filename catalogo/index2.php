<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FOR SALE INTERNACIONAL</title>
<style type="text/css">
<!--
body {
	background-repeat: repeat-x;
	background-color: #03264C;
}
-->
</style>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style7 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; }
.style8 {
	font-size: 24px
}
-->
</style>
</head>

<body background="images/fondo.jpg" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<table width="200" border="0"  align="center" cellpadding="0" cellspacing="0"  >
  <tr>
    <td><img src="images/under.jpg" width="800" height="600" /></td>
  </tr>
</table>
<div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">
    <div align="center" class="style8">Desea Escribirnos?</div>
  </div>
  <div class="CollapsiblePanelContent">
    <form id="form1" name="form1" method="post" action="enviar.php">
      <table width="373" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="108"><span class="style7">Su nombre</span></td>
          <td width="249"><span id="sprytextfield1">
            <input type="text" name="nombre" id="nombre" />
          <span class="textfieldRequiredMsg">El nombre Es Requerido</span></span></td>
        </tr>
        <tr>
          <td><span class="style7">Su correo</span></td>
          <td><span id="sprytextfield2">
            <input type="text" name="correo" id="correo" />
          <span class="textfieldRequiredMsg">correo electronico necesario</span><span class="textfieldInvalidFormatMsg">Correo Electronico no valido</span></span></td>
        </tr>
        <tr>
          <td><span class="style7">Ciudad</span></td>
          <td><input type="text" name="ciudad" id="ciudad" /></td>
        </tr>
        <tr>
          <td><span class="style7">Teléfono</span></td>
          <td><input type="text" name="telefono" id="telefono" /></td>
        </tr>
        <tr>
          <td height="106"><span class="style7">Comentario</span></td>
          <td><span id="sprytextarea1">
            <textarea name="comentario" id="comentario" cols="45" rows="5"></textarea>
          <span class="textareaRequiredMsg">El comentario es requerido	</span></span></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"></div>            <div align="center">
              <input type="submit" name="button" id="button" value="Enviar" />
            </div></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
  </script>
</body>
</html>
