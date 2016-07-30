<?php
session_start();
require_once("../db.php");
$db = new db_layer();
$db->getConnection();

?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Flash Page Flip Administrator</title>
<style type="text/css">
body{
	margin:0px;
	background-color: #FFFFFF;
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
body,td,th {
	font-family: Tahoma, Verdana, sans-serif;
	font-size: 14px;
	color: #000000;
}
</style>
</head>
<body>
<?php
if($_GET["PageID"] == "" || $_SESSION["fpfAdmin"] == "")
{
?>
	<script>window.self.close();</script>
<?php
}
else
{
	$qry = "select file_name from mag_pages where id='".$_GET["PageID"]."'";
	$db->execute_sql($qry,$result,$error_msg);
	$row = mysql_fetch_object($result);
	if($error_msg <> "")
	{
		echo $error_msg;die;
	}
	else
	{	
		$ext = end(explode('.',$row->file_name));
		//echo $ext;die;
		if($ext <> "swf")
		{
		?>
        <img src="../pages/<?php echo $row->file_name ?>" border="0" />
        <?php
		}
		else
		{
		$tmp = explode('.',$row->file_name);
		$filename = $tmp[0];
			?>
<script src="../js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','100%','height','100%','src','../pages/<?php echo $filename ?>','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','scale','noscale','allowFullScreen','true','allowScriptAccess','sameDomain','movie','../pages/<?php echo $filename ?>' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%">
<param name="movie" value="../pages/<?php echo $filename ?>" />
<param name="quality" value="high" />
<param name="scale" value="noscale" />
<param name="allowFullScreen" value="true" />
<param name="allowScriptAccess" value="sameDomain" />
<embed src="../pages/<?php echo $filename ?>" width="100%" height="100%" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" allowFullScreen="true" allowScriptAccess="sameDomain"></embed>
</object></noscript>
            <?php
		}
	}

}
?>
</body></html>