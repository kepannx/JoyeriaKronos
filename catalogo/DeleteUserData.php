<?php
require_once("db.php");
			
$db = new db_layer();
$db->getConnection();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$UserData = $_POST["UserData"];
	$UserID = $_POST["UserID"];
	$MagID = $_POST["MagID"];
	$MagNo = $_POST["MagNo"];
	$PageNo = $_POST["PageNo"];
}
else
{
	$UserData = $_GET["UserData"];
	$UserID = $_GET["UserID"];
	$MagID = $_GET["MagID"];
	$MagNo = $_GET["MagNo"];
	$PageNo = $_GET["PageNo"];
}

if($UserData == "Note")
{
	$qry = "delete from page_notes where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";
}
else if($UserData == "Marker")
{
	$qry = "delete from page_markers where user_id='".$UserID."' and mag_id='".$UserID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";
}

$db->execute_sql($qry,$result,$error_msg);
if($error_msg <> "")
{
	echo "deleted=0";
}
else
{
	echo "deleted=1";
}

?>