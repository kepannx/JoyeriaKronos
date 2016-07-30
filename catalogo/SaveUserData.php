<?php
require_once("config.php");
require_once("db.php");
require_once("phpmailer/class.phpmailer.php");

$db = new db_layer();
$db->getConnection();

$UserData = $_POST["UserData"];
$UserPassword = $_POST["UserPassword"];
$UserEmail = $_POST["UserEmail"];
$UserID = $_POST["UserID"];
$MagID = $_POST["MagID"];
$MagNo = $_POST["MagNo"];
$PageNo = $_POST["PageNo"];
$NoteData = $_POST["NoteData"];
$NoteWin = $_POST["NoteWin"];
$MarkerData = $_POST["MarkerData"];
$bgID = $_POST["bgID"];

if($_POST["UserData"] == "Note")
{
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id == "")
		{
			$qry = "insert into page_notes(user_id,mag_id,mag_no,page_no,page_note,note_win) values ";
			$qry .= "('".$UserID."','".$MagID."','".$MagNo."','".$PageNo."','".$NoteData."','".$NoteWin."')";
		}
		else
		{
			$qry = "update page_notes set page_note='".$NoteData."', note_win='".$NoteWin."' ";
			$qry .= "where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";
		}

		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{
			echo "saved=1";
		}
	}

}
else if($_POST["UserData"] == "NoteWin")
{
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id != "")
		{
			$qry = "update page_notes set note_win='".$NoteWin."' ";
			$qry .= "where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";

			$db->execute_sql($qry,$result,$error_msg);
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{
				echo "saved=1";
			}
		}
	}

}
else if($_POST["UserData"] == "Marker")
{
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id == "")
		{
			$qry = "insert into page_markers(user_id,mag_id,mag_no,page_no,page_marker) values ";
			$qry .= "('".$UserID."','".$MagID."','".$MagNo."','".$PageNo."','".$MarkerData."')";
		}
		else
		{
			$qry = "update page_markers set page_marker='".$MarkerData."' ";
			$qry .= "where user_id='".$UserID."' and mag_id='".$MagID."' and mag_no='".$MagNo."' and page_no='".$PageNo."'";
		}
		$db->execute_sql($qry,$result,$error_msg);

		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{
			echo "saved=1";
		}
	}
}
else if($_POST["UserData"] == "Background")
{
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{
		$row = mysql_fetch_object($result);
		if($row->id == "")
		{
			$qry = "insert into users_bg(bg_id,user_id,mag_name_id,mag_no_id) values ";
			$qry .= "('".$bgID."','".$UserID."','".$MagID."','".$MagNo."')";
		}
		else
		{
			$qry = "update users_bg set bg_id='".$bgID."' ";
			$qry .= "where user_id='".$UserID."' and mag_name_id='".$MagID."' and mag_no_id='".$MagNo."'";
		}

		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{
			echo "saved=1";
		}
	}
}
?>