<?php
session_start();
require_once("../config.php");
require_once("../db.php");

$db = new db_layer();
$db->getConnection();
include("Header.php");
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	@$Categories = $_GET["Categories"];
	@$catName = $_GET["catName"];
	@$pWidth = $_GET["pWidth"];
	@$pHeight = $_GET["pHeight"];
	@$CatID = $_GET["CatID"];
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$Categories = $_POST["Categories"];
	$catName = $_POST["catName"];
	$pWidth = $_POST["pWidth"];
	$pHeight = $_POST["pHeight"];
	$CatID = $_POST["CatID"];
	
	if($Categories == "0" || $catName == "" || $pWidth == "" || $pHeight == "")
	{
		$FormError = "1";
	}
	else
	{
		$qry = "insert into mag_numbers(description,mag_id,pages_width,pages_height,mag_date) values (";
		$qry .= "'".str_replace("'","",$catName)."','".str_replace("'","",$Categories)."','";
		$qry .= str_replace("'","",$pWidth)."','".str_replace("'","",$pHeight)."', now())";
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
			document.location.href = "EditSubCat.php?SubCatID=<?php echo $new_id ?>";
			</script>
            <?php
		}
		
	}
}
?>
<table width="600" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#666666">
  <Form name="NewMagazine" method="post" action="?Process=AddMag"><tr>
    <td colspan="2" bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:20px; font-weight:bold">Add Publication</span></td>
  </tr>
   <?php
   if(@$FormError == "1")
   {
   ?>
   <tr>
      <td colspan="2" align="center" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px; color:#f30"><p>Por Favor Llene Sus Datos!</p></td>
    </tr>
    <?php
	}
	?>
    <tr>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">&nbsp;</td>
      <td bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px; font-weight:bold"><a href="AddCat.php" style="color:#0c0">Add a New Category »</a></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">Select Category:</td>
      <td bgcolor="#222222"><select name="Categories" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:16px; padding:3px; width:350px; height:30px">
      <?php
	  	$qry = "select * from mag_name";
		$db->execute_sql($qry,$result,$error_msg);
		if($error_msg <> "")
		{
			echo $error_msg;
		}
		else
		{	
			while($row = mysql_fetch_object($result))
			{
			?>
            <option value="<?php echo $row->id?>"
            <?php
			if($row->id == $CatID || $row->id == $Categories)
			{
				echo " selected ";
			}
			?>
            ><?php echo $row->name ?></option>
            <?php
			}
		}
	  ?>
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">Nombre de la Publicacion:</td>
      <td bgcolor="#222222"><input name="catName" type="text" id="catName" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:16px; padding:3px; width:350px; height:30px" value="<?php echo $catName ?>" maxlength="100" ></td>
    </tr>
    
  <tr>
    <td width="30%" align="right" bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:18px">&nbsp;</td>
    <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serIf; font-size:14px">width :
      <input name="pWidth" type="text" id="pWidth" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:40px; height:20px" maxlength="4" value="<?php echo $pWidth ?>" >
      height :
      <input name="pHeight" type="text" id="pHeight" style="font-family:Verdana, Arial, Helvetica, sans-serIf; font-size:12px; width:40px; height:20px" maxlength="4" value="<?php echo $pHeight ?>" ></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#222222">&nbsp;</td>
    <td bgcolor="#222222"><input type="submit" name="Submit" value="Submit" style="font-family: Tahoma, Verdana, sans-serIf; font-size:16px"></td>
  </tr></Form>
</table>
<?php
include("Footer.php");
?>