<?php 
require_once("Connections/joyeria.php");
require_once("libreria/txt.php");
require_once("libreria/carrito.php");
$id_categoria=$_GET["id_subcategoria"];
@$id_subcategoria=$_GET["id_subcategoria"];
@$id_marca=$_GET["id_marca"];

switch($id_categoria){
	case 4:
	require_once("libreria/sub2.php");
	break;
	
	default:
	require_once("libreria/sub1.php");
	}
	?>