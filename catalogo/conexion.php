<?php

if($conexion= mysql_connect("localhost","alejandro","4516865")){
echo "ok"; }

else {
echo mysql_error();
}

$sql="SELECT * FROM mag_numbers";
$query=mysql_db_query("magazine",$sql,$conexion);

$fetch = mysql_fetch_array($query);

echo $fetch[0]; 
?>