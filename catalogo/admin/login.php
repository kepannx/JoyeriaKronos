<?php
session_start();
require_once("../config.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if($_POST["password"] == ADMIN_PASSWORD)
	{
		$_SESSION["fpfAdmin"] = "1";
		?>
        <script language="javascript" type="text/javascript">
			document.location.href = "index.php";
		</script>
        <?php
		die;
	}
	else
	{
		$FormError = "1";
	}
}
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

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
<title>Catalogo</title>
</head>
<body>
<?php
echo "<table width='600' border='0' bgcolor='#222222' align='center'><tr align='center'><td align='center'>";
if($FormError == "1")
{
?>

<table width="600" border="0" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td><ul>
		<li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">La contrase&ntilde;a es incorrecta!</li>
    </ul></td>
  </tr>
</table>
<?php
}
if($_SESSION["fpfAdmin"] == "")
{
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
  <form name="Login" method="post" action="index.php?Process=Login">
    <tr>
      <td width="30" bgcolor="#222222"><a href="http://www.flashpageflip.com" target="_blank"><img src="img/loginlogo.gif" alt="FlashPageFlip.com" width="250" height="73" border="0"></a></td>
    </tr>
    <table width="600" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#666666">
      <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serif; font-size:20px; font-weight:bold">Administrador de Catalogo<br>
      </span></td>
  </tr>
  <tr>
    <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">Admin Password:</td>
    <td bgcolor="#222222"><input name="password" type="password" id="password" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:300px; height:30px" maxlength="16"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Submit" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px"></td>
  </tr></form>
</form>
<?php
}
echo "</td></tr></table>";
?><br /><center>
  <a href="http://www.flashpageflip.com" target="_blank" style="font-family: Tahoma, Verdana, sans-serif; font-size:12px" class="menu">www.joyeriakronos.com</a>
</center></body></html>