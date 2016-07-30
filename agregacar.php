<?php 
session_start();
extract($_REQUEST);
require_once("Connections/joyeria.php");
//mysql_connect("localhost","root","");
mysql_select_db("joyeria");
if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from productos where id='".$id."'");
$row=mysql_fetch_array($qry);
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'id'=>$id,'valor'=>$row['valor']);
$_SESSION['carro']=$carro;
header("Location:ver_producto.php?id=".$id);
?>