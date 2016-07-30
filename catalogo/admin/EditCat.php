<?php
require_once("../db.php");
include("Header.php");
$db = new db_layer();
$db->getConnection();

$CatID = $_GET["CatID"];
$Process = $_GET["Process"];

if($CatID == "")
{
	?>
	<script language="javascript" type="text/javascript">
	document.location.href = "index.php";
	</script>
	<?php
	die;
}
else
{
	$CatID = str_replace("'","",$CatID);
	
	$qry = "select id,name from mag_name where id='".$CatID."'";
	//echo $qry;die;
	$db->execute_sql($qry,$result,$error_msg);
	$row = mysql_fetch_object($result);
	if($error_msg <> "")
	{
		echo $error_msg;die;
	}
	else
	{	
		$CatName = $row->name;
		$CatID = $row->id;
	}
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$Process = $_GET["Process"];
	if($Process == "Update")
	{
		$catName = str_replace("'","",$_POST["catName"]);
		if($catName == "")
		{
			$FormError = "1";
		}
		else
		{
			$qry = "update mag_name set name='".$catName."' where id='".$CatID."'";
			$db->execute_sql($qry,$result,$error_msg);
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{	
				?>
                <script language="javascript" type="text/javascript">
					document.location.href = "EditCat.php?Process=OK&CatID=<?php echo $CatID ?>";
				</script>
                <?php
				die;
			}
		}
	}

	
}
else
{
	if($Process == "DelCat")
	{
		$catName = str_replace("'","",$CatName);
		if($catName == "")
		{
			$FormError = "1";
		}
		else
		{
			$qry = "select * from mag_numbers  where id='".$CatID."'";
			$db->execute_sql($qry,$result,$error_msg);
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{	
				while($row = mysql_fetch_object($result))
				{
					$qry_mag = "select * from mag_pages where mag_no_id='".$row->id."'";
					$db->execute_sql($qry_mag,$result_mag,$error_msg);
					if($error_msg <> "")
					{
						echo $error_msg;
					}
					else
					{
						$Path = "../pages/";
						while($row_mag = mysql_fetch_object($result_mag))
						{
							if(file_exists($path.$row_mag->filename))
							{
								if(!unlink($path.$row_mag->filename))
								{
									echo "There was a problem deleting '".$row->filename."'";
								}	
								else
								{
								
									$qry_delete = "delete from page_markers where mag_id='".$CatID."' and mag_no='".$row_mag->id."' ";
									$db->execute_sql($qry_delete,$result_delete,$error_msg);
									$qry_delete = "delete from page_notes where mag_id='".$CatID."' and mag_no='".$row_mag->id."'";
									$db->execute_sql($qry_delete,$result_delete,$error_msg);
									$qry_delete = "delete from page_notes where mag_name_id='".$users_bg."' and mag_no='".$row_mag->id."' ";
									$db->execute_sql($qry_delete,$result_delete,$error_msg);
									if($error_msg <> "")
									{
										echo $error_msg;
									}
								}
							}
						}
						$qry_mag_delete = "delete from mag_pages where mag_no_id='".$row_mag->id."'";
						$db->execute_sql($qry_mag_delete,$result_mag_delete,$error_msg);
						if($error_msg <> "")
						{
							echo $error_msg;
						}
			
					}	
				}
				$qry_delete_mag = "delete from mag_numbers where mag_id='".$CatID."' ";
				$db->execute_sql($qry_delete_mag,$result_mag_delete,$error_msg);
				$qry_delete_mag = "delete from mag_name where id='".$CatID."'";
				$db->execute_sql($qry_delete_mag,$result_mag_delete,$error_msg);
				if($error_msg <> "")
				{
					echo $error_msg;
				}
				else
				{
					?>
					<script language="javascript" type="text/javascript">
                    document.location.href = "index.php";
                    </script>
                    <?php
				}
			}
		}
	}
}

?>

<table width="600" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#666666">
  <form name="EditCat" method="post" action="?Process=Update&CatID=<?php echo $CatID ?>"><tr>
    <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serif; font-size:20px; font-weight:bold">Edit Category</span> <span style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px; font-weight:bold">(<a href="javascript://" onClick="AreYouSure = window.confirm('Are you sure you want to delete this category and publications?'); if(AreYouSure){window.location='EditCat.php?Process=DelCat&CatID=<?php echo $CatID ?>'}" style="color:#f30">delete category</a>)</span></td>
  </tr>
  <?php
  if($Process == "Update" && $FormError == "1")
  {
  ?>
   <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#f30"><p>invalid category name!</p></td>
    </tr>
   <?php
   }
   else if($Process == "OK")
   {
   ?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px; color:#0c0"><p>category name updated!</p></td>
    </tr>
    <?php
	}
	?>
  <tr>
    <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">Category Name:</td>
    <td bgcolor="#222222"><input name="catName" type="text" id="catName" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; padding:3px; width:350px; height:30px" value="<?php echo $CatName ?>" maxlength="100"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Submit" style="font-family: Tahoma, Verdana, sans-serif; font-size:16px"></td>
  </tr></form>
</table>
<?php include("Footer.php") ?>