<?php
require_once("config.php");
require_once("db.php");
require_once("phpmailer/class.phpmailer.php");

$db = new db_layer();
$db->getConnection();

function isValidEmail($_email) 
{
    if(eregi("^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$",$_email)) 
	{
       return true;
    }
    else 
	{
       return false;
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$email = $_POST["email"];
	$pass1 = $_POST["pass1"];
	$pass2 = $_POST["pass2"];
}
else
{
	$email = $_GET["email"];
	$pass1 = $_GET["pass1"];
	$pass2 = $_GET["pass2"];
}

$FormError = "0";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(!isValidEmail($email))
	{
		$FormError = "1";
	}
	else if($pass1 == "" || $pass2 == "" || (strlen($pass1) < 6) || (strlen($pass2) < 6) )
	{
		$FormError = "2";
	}	
	else if($pass1 != $pass2)
	{
		$FormError = "3";
	}
	else
	{
		$qry = "select email from users where email='".$email."'";
		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{
			$row = mysql_fetch_object($result);
			if($row->email != "")
			{
				$FormError = "4";
			} 
			else
			{
				$qry = "select password from users where email='".$email."'";
				$db->execute_sql($qry,$result,$error_msg);
				if($error_msg <> "")
				{
					echo $error_msg;
				}
				else
				{
					$qry = "insert into users(email,password,date) values('".$email."','".$pass1."',now())";
					$db->execute_sql($qry,$result,$error_msg);
					if($error_msg <> "")
					{
						echo $error_msg;
					}
					else
					{
						$FormError = "0";
					}
				}
			}
		}
	}

}
?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formato de Inscripcion</title>
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
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
?>
<table width="600" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td><ul>
    <?php
	if($FormError == "0")
	{
	?>
      <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#0c0">Gracias por Registrarse</li>
    <?php
	}
	else if($FormError == "1")
	{
	?>
      <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">El correo electronico es incorrecto</li>
    <?php
	}
	else if($FormError == "2" || $FormError == "3")
	{
	?>
      <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">Su contrase&ntilde;a es invalida(minimo 6 caracteres)</li>
    <?php
	}
	else if($FormError == "4")
	{
	?>
	  <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">Este correo electronico esta registrado! (<a href="LostPassword.php">Perdio su Password?</a>)</li>
    <?php
	}
	?>
    </ul></td>
  </tr>
</table>
<?php
}
?>
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#666666">
<form id="frm" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" />
      <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serif; font-size:20px; font-weight:bold">For Sale Internacional. Registro de Usuarios</span></td>
  </tr>
  <tr>
    <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">E-mail:</td>
    <td bgcolor="#222222">
      <input name="email" type="text" id="email" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:300px; height:30px" maxlength="50">    </td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">Password:</td>
    <td bgcolor="#222222"><input name="pass1" type="password" id="pass1" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:300px; height:30px" maxlength="16"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">Confirme Password :</td>
    <td bgcolor="#222222"><input name="pass2" type="password" id="pass2" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:300px; height:30px" maxlength="16"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Incribirme!!" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px"></td>
  </tr></form>
</table>
</body></html>