<?php 
ob_start("ob_gzhandler");
session_start();
mysql_connect("lifedesi.startlogicmysql.com","joyeria","25165258");
mysql_select_db("joyeria");
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
$qry=mysql_query("select * from productos");
?>