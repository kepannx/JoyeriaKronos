<?php
require_once("config.php");
require_once("phpmailer/class.phpmailer.php");
require_once("db.php");

$db = new db_layer();
$db->getConnection();


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$userEmail = stripslashes($_POST["userEmail"]);
	$userFriendEmail = stripslashes($_POST["userFriendEmail"]);
	$userMessage = stripslashes($_POST["userMessage"]);
}
else
{
	$userEmail = stripslashes($_GET["userEmail"]);
	$userFriendEmail = stripslashes($_GET["userFriendEmail"]);
	$userMessage = stripslashes($_GET["userMessage"]);
}

if($userMessage == "")
{
	$userMessage = "...";
}

$mBody="<font style='color:#000000;font-family:tahoma;font-size:11px'>";
$mBody .= "<b>Your Friend :</b> <a href='mailto:".$userEmail."'>".$userEmail."</a><br><br>";
$mBody .= "<b>thought you might be interested in :</b> <a href='".STF_LINK."'>".STF_LINK."</a><br><br>";
$mBody .= "<b>Your Friend's Message :</b> ".$userMessage." <br><br>";
$mBody .= "</font>";

$mail = new PHPMailer();
$mail->SetLanguage = "en";
$mail->CharSet  = CHAR_SET;
$mail->From     = MAIL_SENDER_EMAIL;
$mail->FromName = MAIL_FROM_NAME;
$mail->Host     = MAIL_SERVER;
$mail->Subject  = STF_SUBJECT;
$mail->Username = MAIL_SENDER_USERNAME;
$mail->Password = MAIL_SENDER_PASSWORD;
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->IsSMTP();
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = $mBody;
$mail->AddAddress($userFriendEmail);

//echo "sending=1";
if($mail->Send())
{
	echo "sending=1";
}
else
{
	echo $error_msg;
}

?>