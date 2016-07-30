<?php

// filename: upload.form.php

// first let's set some variables

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';

// set a max file size for the html upload form
$max_file_size = 3000000000000; // size in bytes

// now echo the html page
?>
<link href="../../css/estilopanel.css" rel="stylesheet" type="text/css" />


	<form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">
		<table width="480" height="87" border="0" cellpadding="0" cellspacing="0" class="estilos1" align="left">
		  <tr>
		    <td colspan="2"><label for="file">Archivo</label>
			<input id="file" type="file" name="file">
			<input name="codigo" type="hidden" id="codigo" value="<?php echo $_GET["codigo"]; ?>" />
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>" /></td>
	      </tr>
		  <tr>
		    <td width="160" height="32" align="left">Titulo</td>
		    <td width="320"><label>
		      <input type="text" name="titulo" id="titulo" />
	        </label></td>
	      </tr>
		  <tr>
		    <td height="31" align="left">Descripcion</td>
		    <td><label>
		      <textarea name="descripcion" id="descripcion" cols="45" rows="3"></textarea>
		    </label></td>
	      </tr>
		  <tr>
		    <td height="31" colspan="2" align="center"><input id="submit" type="submit" name="submit" value="Subir" /></td>
	      </tr>
      </table>
		
		  <label for="submit"></label>
	
</form>