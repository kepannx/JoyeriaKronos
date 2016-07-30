<?php
require_once("../db.php");
include("Header.php");
$db = new db_layer();
$db->getConnection();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$catName = $_POST["catName"];
	
	if($catName == "")
	{
		$formError = "1";
	}	
	else
	{
		$qry = "insert into mag_name(name) values('".str_replace("'","",$catName)."')";
		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{	
            $new_id = mysql_insert_id();
			?>
            	<script language="javascript" type="text/javascript">
				document.location.href="AddMag.php?CatID=<?php echo $new_id ?>";
				</script>
            <?php
			die;
		}
	}
}
?>
<table width="600" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#666666">
  <Form name="NewCategory" method="post" action="?Process=AddCat"><tr>
    <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:20px; font-weight:bold">Add Category</span></td>
  </tr>
  <?php
  if($FormError == "1")
  {
  ?>
    <%If Request("Process")="AddCat" and FormError=1 Then%><tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>missing information! category name required...</p></td>
    </tr>
   <?php
   }
   ?>
    <tr>
      <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">Category Name:</td>
      <td bgcolor="#222222"><input name="catName" type="text" id="catName" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:16px; padding:3px; width:350px; height:30px" maxlength="100"></td>
    </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Submit" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px"></td>
  </tr></Form>
</table>
<?php
include("Footer.php");
?>