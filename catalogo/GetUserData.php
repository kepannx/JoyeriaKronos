<?php
require_once("config.php");
require_once("db.php");
			
$db = new db_layer();
$db->getConnection();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$userData = $_POST["userData"];
	$userPassword = $_POST["userPassword"];
	$userEmail = $_POST["userEmail"];
	$UserID = $_POST["UserID"];
	$MagID = $_POST["MagID"];
	$MagNo = $_POST["MagNo"];
	$PageNo = $_POST["PageNo"];
}
else
{
	$userData = $_GET["userData"];
	$userPassword = $_GET["userPassword"];
	$userEmail = $_GET["userEmail"];
	$UserID = $_GET["UserID"];
	$MagID = $_GET["MagID"];
	$MagNo = $_GET["MagNo"];
	$PageNo = $_GET["PageNo"];
}


if($_POST["userData"] == "Login")
{
	$qry = "select id, password from users where email='".$userEmail."'";
	
	$db->execute_sql($qry,$result,$error_msg);
	if($error_msg <> "")
	{
		echo "login=0";
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->password == $userPassword)
		{
			echo "userID=".$row->id."&login=1";
		}
		else
		{
			echo "login=1";
		}
	}
}
else if($_POST["UserData"] == "Note")
{
	$qry = "select * from page_notes where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";

	$db->execute_sql($qry,$result,$error_msg);
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id != "")
		{
			echo "noteData=".$row->page_note."&noteWin=".$row->note_win."&getting=1";
		}
	}
}
else if($_POST["UserData"] == "Marker")
{
	$qry = "select * from page_markers where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";

	$db->execute_sql($qry,$result,$error_msg);
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id != "")
		{
			echo "markerData=".$row->page_marker."&getting=1";
		}
	}
}
else if($_POST["UserData"] == "Background")
{

	$qry = "select * from users_bg where user_id='".$UserID."' and mag_name_id='".$MagID."' and mag_no_id='".$MagNo."'";

	$db->execute_sql($qry,$result,$error_msg);
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id != "")
		{
			echo "bgData=".$row->bg_id."&getting=1";
		}
	}
}
?>