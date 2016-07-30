<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$MagID = $_POST["MagID"];
	$MagNo = $_POST["MagNo"];
}
else
{
	$MagID = $_GET["MagID"];
	$MagNo = $_GET["MagNo"];
}
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo WEBSITE_NAME ?></title>
<meta name="Description" content="Flash Page Flip is best advanced dynamic page flip flash object">
<meta name="Keywords" content="page flip, page flipping, page turn, flip album, flipping book, digital book, online catalog">
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="js/PopUpWin.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-color: #ccc;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','100%','height','100%','src','swf/Magazine.swf?userID=1&MagID=<?php echo $MagID ?>&MagNo=<?php echo $MagNo ?>','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#cccccc','allowFullScreen','true','allowScriptAccess','sameDomain','movie','swf/Magazine?MagID=<?php echo $MagID ?>&MagNo=<?php echo $MagNo ?>' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%">
  <param name="movie" value="swf/Magazine.swf?MagID=<?php echo $MagID ?>&MagNo=<?php echo $MagNo ?>" />
  <param name="quality" value="high" />
  <param name="bgcolor" value="#cccccc" />
  <param name="allowFullScreen" value="true" />
  <param name="allowScriptAccess" value="sameDomain" />
  <embed src="swf/Magazine.swf?MagID=<?php echo $MagID ?>&MagNo=<?php echo $MagNo ?>" width="100%" height="100%" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" allowFullScreen="true" allowScriptAccess="sameDomain"></embed>
</object></noscript></body></html>