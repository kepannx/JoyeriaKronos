<?php
require_once("../db.php");
$db = new db_layer();
$db->getConnection();
$MagID = $_GET["MagID"];
$MagNo = $_GET["MagNo"];

$qry = "select * from mag_numbers where mag_id='".$MagID."' and id='".$MagNo."'";
//echo $qry;die;
$db->execute_sql($qry,$result,$error_msg);
$row = mysql_fetch_object($result);
if($error_msg <> "")
{
	echo $error_msg;die;
}
else
{	
?>
<content width="<?php echo $row->pages_width ?>" height="<?php echo $row->pages_height ?>" cpage="<?php echo $row->contents_page ?>" bgcolor="<?php echo $row->bg_color ?>" loadercolor="<?php echo $row->loader_color ?>" bgimage="<?php echo $row->bg_image ?>" panelcolor="<?php echo $row->panel_color ?>" buttoncolor="<?php echo $row->button_color ?>" textcolor="<?php echo $row->text_color ?>">
<?php
	$qry = "select * from mag_pages where mag_no_id='".$row->id."' order by id asc";
	//echo $qry;die;
	if($error_msg <> "")
	{
		echo $error_msg;die;
	}
	else
	{	
		$db->execute_sql($qry,$result,$error_msg);
		while($row = mysql_fetch_object($result))
		{
			?>
			<page src="pages/<?php echo $row->file_name ?>"/>
			<?php
		}
		echo "</content>";
	}
}
?>