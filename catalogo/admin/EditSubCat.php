<?php
require_once("../db.php");
include("Header.php");
$db = new db_layer();
$db->getConnection();

$uploaddir = '../pages/';


@$SubCatID = $_GET["SubCatID"];
@$Process = $_GET["Process"];
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	@$Categories = $_GET["Categories"];
	@$catName = $_GET["catName"];
	@$pWidth = $_GET["pWidth"];
	@$pHeight = $_GET["pHeight"];
	@$CatID = $_GET["CatID"];
	@$PageID = $_GET["PageID"];
}

if($SubCatID == "")
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
	$CatID = str_replace("'","",$SubCatID);
	$qry = "select * from mag_numbers where id='".$CatID."'";
	$db->execute_sql($qry,$result,$error_msg);
	$row = mysql_fetch_object($result);
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{	
		$CatName = $row->description;
		$pWidth = $row->pages_width;
		$pHeight = $row->pages_height;

	}
	if($Process == "DelPage")
	{
		$qry = "select * from mag_pages where id='".$PageID."'";
		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{	
			while($row = mysql_fetch_object($result))
			{
				$tmp_name = $uploaddir.$row->file_name;
				//unset($tmp_name);
				@unlink($tmp_name);
				$qry_delete_page = "delete from mag_pages where id='".$PageID."' ";
				$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);
				$qry_delete_page = "delete from page_markers where mag_no='".$row->mag_no_id."' and page_no='".$PageID."' ";
				$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);
				$qry_delete_page = "delete from page_notes where mag_no='".$row->mag_no_id."' and page_no='".$PageID."' ";
				$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);

			}
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{
				?>
				<script language="javascript" type="text/javascript">
				document.location.href = "EditSubCat.php?SubCatID=<?php echo $SubCatID; ?>";
				</script>
				<?php
			}

		}
	}
		if($Process == "DelMag")
	{
		$qry = "select*from mag_numbers where id='".$CatID."'";
		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{	
			while($row_del = mysql_fetch_object($result))
			{
				$qry_del = "select * from mag_pages where mag_no_id='".$row_del->id."'";
				//echo $qry_del;die;
				$db->execute_sql($qry_del,$result_delete,$error_msg);
				if($error_msg <> "")
				{
					echo $error_msg;
				}
				else
				{	
					while($row_result_delete = mysql_fetch_object($result_delete))
					{
						$tmp = $uploaddir.$row_result_delete->file_name;
						//echo $tmp;die;
						@unlink($tmp_name);
						$qry_temp = "delete from mag_pages where id='".$row_result_delete->id."'";
						//echo $qry_temp;die;
						$db->execute_sql($qry_temp,$result_temp,$error_msg);
						if($error_msg <> "")
						{
							//echo $error_msg;die;
						}
						$qry_delete_page = "delete from mag_pages where id='".$row_del->id."'; ";
						$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);
						$qry_delete_page = "delete from page_markers where mag_no='".$row_result_delete->mag_no_id."' and page_no='".$row_del->id."'; ";
						$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);
						$qry_delete_page = "delete from page_notes where mag_no='".$row_result_delete->mag_no_id."' and page_no='".$row_del->id."'; ";
						$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);
						$qry_delete_page = "delete from users_bg where mag_no='".$row_result_delete->mag_no_id."' and page_no='".$row_del->id."'; ";
						$db->execute_sql($qry_delete_page,$result_delete_page,$error_msg);

					}
					if($error_msg <> "")
					{
						echo $error_msg;
					}
					else
					{
						
					}
		
				}
			}
			?>
			<script language="javascript" type="text/javascript">
            document.location.href = "index.php";
            </script>
            <?php
		}	
	}
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$Process = $_GET["Process"];
	@$Categories = $_POST["Categories"];
	$catName = $_POST["catName"];
	$pWidth = $_POST["pWidth"];
	$pHeight = $_POST["pHeight"];
	$cPage = $_POST["cPage"];
	$bgColor = $_POST["bgColor"];
	$bgImage = $_POST["bgImage"];
	$loaderColor = $_POST["loaderColor"];
	$panelColor = $_POST["panelColor"];
	$buttonColor = $_POST["buttonColor"];
	@$textColor = $_POST["textColor"];
	$PageID = $_POST["PageID"];

	if($Process == "Update")
	{

		$catName = str_replace("'","",$_POST["catName"]);
		if($catName == "" || $pWidth == "" || $pHeight == "" || $cPage == "" )
		{
			$FormError = "1";
		}
		else
		{
			$qry = "update mag_numbers set description='".str_replace("'","",$catName)."',pages_width='".str_replace("'","",$pWidth)."',pages_height='".str_replace("'","",$pHeight)."',contents_page='".str_replace("'","",$cPage)."',bg_color='".str_replace("'","",$bgColor)."',bg_image='".str_replace("'","",$bgImage)."',loader_color='".str_replace("'","",$loaderColor)."',panel_color='".str_replace("'","",$panelColor)."',button_color='".str_replace("'","",$buttonColor)."',text_color='".str_replace("'","",$textColor)."' where id='".$CatID."'";
			//echo $qry;die;
			$db->execute_sql($qry,$result,$error_msg);
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{	
				//print_r($_FILES['dosya']);die;
				if($_FILES['dosya']['tmp_name'] != "")
				{
					$allowed_ext = "jpg, jpeg, JPG, JPEG, gif, GIF, png, PNG, swf";
					$extension = pathinfo($_FILES['dosya']['name']);
					@$extension = $extension[extension];
					$allowed_paths = explode(", ", $allowed_ext);
					$FormError = "4";
					for($i = 0; $i < count($allowed_paths); $i++) 
					{
						if ($allowed_paths[$i] == $extension) 
						{
							$FormError = "0";
							$i = count($allowed_paths);
							$newFileName = str_replace(" ","",str_replace(".","",microtime()));
							$uploadFileName = $newFileName.".".$extension;
							//echo 
							if(move_uploaded_file($_FILES['dosya']['tmp_name'], $uploaddir.$uploadFileName)) 
							{
								$qry = "insert into mag_pages(mag_no_id,file_name) values('".$CatID."','".$uploadFileName."')";
								$db->execute_sql($qry,$result,$error_msg);
								if($error_msg <> "")
								{
									$FormError = "2";
								}
							}
							else
							{
								$FormError = "3";
							}	
						}
						
					}
					
				}
				
			}
			if($FormError == "")
			{
			?>
                <script language="javascript" type="text/javascript">
					document.location.href = "EditSubCat.php?Process=OK&SubCatID=<?php echo $CatID ?>";
				</script>
                <?php
				die;
			}				
		}
	}
	

}
	$qry = "select * from mag_numbers where id='".$CatID."'";
	$db->execute_sql($qry,$result,$error_msg);
	$row = mysql_fetch_object($result);
	if($error_msg <> "")
	{
		echo $error_msg;
	}
	else
	{	
		$CatName = $row->description;
		$CatID = $row->id;
		$bgColor = $row->bg_color;
		$bgImage = $row->bg_image;
		$cPage = $row->contents_page;
		$loaderColor = $row->loader_color;
		$panelColor = $row->panel_color;
		$buttonColor = $row->button_color;
		$textColor = $row->text_color;
	}



?>
<script language="javascript" type="text/javascript">
function add_page()
{
document.EditSubCat.submit();
}
</script>
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#666666">
  <form name="EditSubCat" id="EditSubCat" method="post" action="?Process=Update&SubCatID=<?php echo $CatID ?>" enctype="multipart/form-data"><tr>
    <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:20px; font-weight:bold">Edit Publication </span> <span style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px; font-weight:bold">(<a href="javascript://" onClick="AreYouSure = window.confirm('Are you sure you want to delete this publication?'); if(AreYouSure){window.location='EditSubCat.php?Process=DelMag&SubCatID=<?php echo $CatID ?>'}" style="color:#f30">delete publication</a>)</span></td>
  </tr>
	<?php if($Process == "Update" && $FormError == "1") 
    {
    ?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>please fill in all fields!</p></td>
    </tr>
    <?php
    }
	else if($Process == "Update" && $FormError == "2") 
    {
    ?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>There was an error saving to the database. Please try again</p></td>
    </tr>
    <?php
    }
	else if($Process == "Update" && $FormError == "3") 
    {
    ?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>There was an error uploading the file. Please make sure you have permissions to upload files to this folder</p></td>
    </tr>
    <?php
    }
	else if ($Process == "OK")
	{
	?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#0c0"><p>publication  updated!</p></td>
    </tr>
    <?php
	}
	?>
    <tr>
      <td width="27%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">Publication Name:</td>
      <td bgcolor="#222222"><input name="catName" type="text" id="catName" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:16px; padding:3px; width:350px; height:30px" value="<?php echo $CatName ?>" maxlength="100"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">&nbsp;</td>
      <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px">width:
        <input name="pWidth" type="text" id="pWidth" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:40px; height:20px" value="<?php echo $pWidth ?>" maxlength="4">
        height:
        <input name="pHeight" type="text" id="pHeight" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:40px; height:20px" value="<?php echo $pHeight ?>" maxlength="4">
        membership page:
        <input name="cPage" type="text" id="cPage" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:40px; height:20px" value="<?php echo $cPage ?>" maxlength="4"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">&nbsp;</td>
      <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px">bg color:
        #<input name="bgColor" type="text" id="bgColor" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $bgColor ?>" maxlength="6">
        bg image:
        <input name="bgImage" type="text" id="bgImage" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $bgImage ?>" maxlength="1">
        loader color:
        #<input name="loaderColor" type="text" id="loaderColor" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $loaderColor ?>" maxlength="6"></td>
    </tr>
    
  <tr>
    <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">&nbsp;</td>
    <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px">panel color:
      #<input name="panelColor" type="text" id="panelColor" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $panelColor ?>" maxlength="6">
      button color:
      #<input name="buttonColor" type="text" id="buttonColor" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $buttonColor ?>" maxlength="6">
      text color:
      #<input name="textColor" type="text" id="textColor" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:50px; height:20px" value="<?php echo $textColor ?>" maxlength="6"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Submit" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px"></td>
  </tr>
</table>
<br>
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#666666">
    <tr>
      <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:20px; font-weight:bold">Add New Page</span></td>
    </tr>
    <?php
	if ($Process == "Update" and $FormError == "1")
	{
		?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>an error occured with your file!</p></td>
    </tr>
	<?php
	}
	else if($Process == "Update" && $FormError == "4") 
    {
    ?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>You are not allowed to upload files with this extension (<b><?php echo $_FILES['dosya']['name'] ?></b>)</p></td>
    </tr>
    <?php
    }
	?>
    <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px; color:#feea83"><p>please only upload <span style="font-weight: bold">.jpg .png .gif</span> or <span style="font-weight: bold">.swf</span> files<br>
      all files must be width: <span style="font-weight: bold"><?php echo $pWidth ?> px</span> and height: <span style="font-weight: bold"><?php echo $pHeight ?> px</span></p></td>
    </tr>
    
    <tr>
      <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">File:</td>
      <td bgcolor="#222222"><input name="dosya" type="file" class="normText11" id="dosya" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:16px; padding:3px; width:350px; height:30px"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#222222">&nbsp;</td>
      <td bgcolor="#222222"><input type="button" name="Submit" value="Add Page" onClick="add_page()" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px"></td>
    </tr>
  </form>
</table>

<?php
$qry = "select  *from mag_pages where mag_no_id='".$CatID."' order by id asc";
$db->execute_sql($qry,$result,$error_msg);
if($error_msg <> "")
{
	echo $error_msg;
}
else
{	
?>
<br>
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#666666">
    <tr>
      <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:20px; font-weight:bold">Added Pages</span></td>
    </tr>

<?php
	$countPage = 0;
	while($row = mysql_fetch_object($result))
	{
		$countPage ++;
		?>
        <tr>
        <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px"><?php echo $countPage; ?>- <a href="ViewPage.php?PageID=<?php echo $row->id ?>" target="_blank" style="text-decoration:none; color:#feea83"><?php echo $row->file_name ?></a></td>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px"><a href="javascript://" onClick="AreYouSure = window.confirm('Are you sure you want to delete?\n\n<?php echo $row->file_name ?>'); if(AreYouSure){window.location='EditSubCat.php?Process=DelPage&SubCatID=<?php echo $CatID ?>&PageID=<?php echo $row->id ?>'}" style="color:#f30">delete</a></td>
      </tr>
        <?php
	
	}
	?>
    </table>
    <?php

}

include("Footer.php") ?>