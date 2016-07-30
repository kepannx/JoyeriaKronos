<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Administrador</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style.css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#c4c4c4">
<div class="bodyintro">
	<form id="login-form" action="validacion.php" method="post">
		<fieldset>
		
			<legend>Log in</legend>
			
			<p>&nbsp;		  </p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>
		    <label for="login">Usuario</label>
		    <span id="sprytextfield2">
			  <label>
			    <input type="text" name="usuario" id="usuario" />
		    </label>
		  <span class="textfieldRequiredMsg">Necesitamos Su Usuario</span></span> </p>
  <div class="clear"></div>
			
		  <p>
			  <label for="password">Contraseña</label>
		    <span id="sprytextfield1">
		    <label>
		      <input type="password" name="contrasena" id="contrasena" />
	        </label>
		  <span class="textfieldRequiredMsg">La contraseña es necesaria</span></span> </p>
		  <p><br /><br />

          </p>
			<div class="clear"></div>
			
			
  <div class="clear"></div>
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Ingresar"/>
			<br />
		</fieldset>
  </form>
	</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>

</html>