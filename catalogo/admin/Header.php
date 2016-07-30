<?php
@session_start();
set_time_limit(300);
require_once("../config.php");
//echo strpos("index.php", $_SERVER['PHP_SELF']) == false;die;
if($_SESSION["fpfAdmin"] == "")
{
	header("location:login.php");
	die;
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$uStatus = $_POST["uStatus"];
}
else
{
	@$uStatus = $_GET["uStatus"];
}
if($uStatus == "LogOff")
{
	header("location:logoff.php");
	die;
}

?>


<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
.tables{
	border:1px solid #666;
	border-collapse: collapse;
	border-spacing: 0pt;
}
body {
	background-color: #303030;
	color:#ccc;
}
body,td,th {
	font-family: Tahoma, Verdana, sans-serif;
}
a {
	font-family: Tahoma, Verdana, sans-serif;
	color: #fff;
}
a:link {
	text-decoration: underline;
}
a:visited {
	text-decoration: underline;
	color: #fff;
}
a:hover {
	text-decoration: none;
	color: #fff;
}
a:active {
	text-decoration: underline;
	color: #fff;
}
a.menu:link {
	text-decoration: none;
}
a.menu:visited {
	text-decoration: none;
	color: #fff;
}
a.menu:hover {
	text-decoration: underline;
	color: #fff;
}
a.menu:active {
	text-decoration: none;
	color: #fff;
}
</style>
<title>Flash Page Flip Administrator</title>
</head>
<body>
<?php
if($_SESSION["fpfAdmin"] != "")
{
?>
<table width="602" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: Tahoma, Verdana, sans-serif; font-size:14px">
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="1" style="font-family: Tahoma, Verdana, sans-serif; font-size:14px">
      <tr>
        <td bgcolor="#141414" style="padding:1"><a href="../index.php"><img src="img/logo.png" width="40" height="40" border="0"></a></td>
        <td bgcolor="#141414" style="padding:10"><a href="index.php" class="menu">Home</a></td>
        <td bgcolor="#141414" style="padding:10"><a href="AddMag.php" class="menu">Add New Publication</a></td>
        <td bgcolor="#141414" style="padding:10"><a href="logoff.php" class="menu">Log Out</a></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
}
?>