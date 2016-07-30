<?php  
require_once("../../Connections/payvaasociados.php");
// filename: upload.processor.php

// first let's set some variables

// make a note of the current working directory, relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the directory that will recieve the uploaded files
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . '../../imagenes/propiedades/';

// make a note of the location of the upload form in case we need it
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.form.php';

// make a note of the location of the success page
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.success.php';

// name of the fieldname used for the file in the HTML form
$fieldname = 'file';



// Now let's deal with the upload

// possible PHP upload errors
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached');

// check the upload form was actually submitted else print form
isset($_POST['submit'])
	or error('the upload form is neaded', $uploadForm);

// check for standard uploading errors
($_FILES[$fieldname]['error'] == 0)
	or error($errors[$_FILES[$fieldname]['error']], $uploadForm);
	
// check that the file we are working on really was an HTTP upload
@is_uploaded_file($_FILES[$fieldname]['tmp_name'])
	or error('not an HTTP upload', $uploadForm);
	
// validation... since this is an image upload script we 
// should run a check to make sure the upload is an image
@getimagesize($_FILES[$fieldname]['tmp_name'])
	or error('only image uploads are allowed', $uploadForm);
	
// make a unique filename for the uploaded file and check it is 
// not taken... if it is keep trying until we find a vacant one
$now = time();
$nombre=$_FILES[$fieldname]['name'];
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$nombre))
{
	$now++;
}

// now let's move the file to its final and allocate it with the new filename
@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
	or error('No hay permisos para  guardar', $uploadForm);
	
$codigo=$_POST["codigo"];
$titulo=$_POST["titulo"];
$an=$now.'-'.$nombre;
$descripcion=$_POST["descripcion"];
$sql="INSERT INTO galeria SET imagen='$an', codigo='$codigo', descripcion='$descripcion', Titulo='$titulo'";
if(@$query=mysql_db_query($database_payvaasociados,$sql,$payvaasociados)){ echo "La imagen fue insertada a esta propiedad, haga <a href=upload.form.php?codigo=".$codigo.">click aqui</a>para  insertar otra";} else { echo "no<br>".mysql_error();}

$an=$now.'-'.$nombre;
 


?>