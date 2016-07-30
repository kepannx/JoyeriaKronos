<?php
session_start();
$_SESSION["fpfAdmin"] = "";
header("location:index.php");
die;
?>