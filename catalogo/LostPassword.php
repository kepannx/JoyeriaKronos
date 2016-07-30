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
	$Process = $_POST["Process"];
}
else
{
	$email = $_GET["email"];
	$Process = $_GET["Process"];
}

$FormError = "0";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(!isValidEmail($email))
	{
		$FormError = "1";
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
			$row = mysql_fetch_object($result);
			if($row->password == "")
			{
				$FormError = "2";
			}
			else
			{
				$mBody= "<font style='color:#000000;font-family:tahoma;font-size:12px'>";
				$mBody .= "<b>Your Account</b></font><br><br>";
				$mBody .= "<font style='color:#000000;font-family:tahoma;font-size:11px'>";
				$mBody .= "<b>Your Email :</b> <a href='mailto:".$email."'>".$email."</a><br><br>";
				$mBody .= "<b>Your Password :</b> ".$row->password." <br><br>";
				$mBody .= "<hr color='black' height='1' width='100%' noshade><br>";
				$mBody .= "<b>Date :</b> ".date("F j, Y, g:i a")."</b>";
				$mBody .= "</font>";
				
				$mail = new PHPMailer();
				$mail->CharSet  = CHAR_SET;
				$mail->From     = MAIL_SENDER_EMAIL;
				$mail->FromName = MAIL_FROM_NAME;
				$mail->Host     = MAIL_SERVER;
				$mail->Subject  = LOST_PASSWORD_SUBJECT;
				$mail->Username = MAIL_SENDER_USERNAME;
				$mail->Password = MAIL_SENDER_PASSWORD;
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->IsHTML(true);
				
				$mail->Body    = $mBody;
				$mail->AddAddress($email);
				if(!$mail->Send())
				{
					$FormError = "3";
				}
				else
				{
					$FormError = "0";
				}
			}
		}
	}
}
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pedri mi Password</title>
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
<form id="frm" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" />
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
        <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#0c0">Su contrase&ntilde;a ha sido enviada a su correo</li>
    <?php
	}
	else if($FormError == "1")
	{
	?>
        <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">Correo electronico incorrecto</li>
    <?php
	}
	else if($FormError == "2")
	{
	?>
       <li style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30">Direccion de Email no exite</li>
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
      <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serif; font-size:20px; font-weight:bold">For Sale internacional. Recuperar Contrase&ntilde;a</span></td>
  </tr>
  <tr>
    <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">E-mail:</td>
    <td bgcolor="#222222">
      <input name="email" type="text" id="email" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:300px; height:30px" maxlength="50">    </td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Recuperar" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px"></td>
  </tr></form>
</table>
</body></html>