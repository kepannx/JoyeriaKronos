<?php
session_start();

require_once("../config.php");
require_once("../db.php");

$db = new db_layer();
$db->getConnection();
include("Header.php");

if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET["Process"] == "Login")
{
	if($_POST["password"] == ADMIN_PASSWORD)
	{
		$_SESSION["fpfAdmin"] = "1";
		?>
        <script language="javascript" type="text/javascript">
			document.location.href = "index.php";
		</script>
        <?php
		die;
	}
	else
	{
		$FormError = "1";
	}
}


?>
<table width="600" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#666666">
  <form name="Login" method="post" action="index.php?Process=Login">
    <tr>
      <td bgcolor="#222222"><span style="font-family: Tahoma, Verdana, sans-serif; font-size:20px; font-weight:bold">Revista - Administrador</span></td>
    </tr>
    <tr>
      <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:18px">Welcome Administrador</td>
    </tr>
    <tr>
      <td bgcolor="#222222" style="font-family: Tahoma, Verdana, sans-serif; font-size:14px; line-height:25px">
        <p><strong>Las Publicaciones:</strong></p>
        <?php
			$qry = "select * from mag_name order by id desc";
			$db->execute_sql($qry,$result,$error_msg);
			if($error_msg <> "")
			{
				echo $error_msg;
			}
			else
			{	
				echo "<ol>";
				while($row = mysql_fetch_object($result))
				{
					echo "<li>".$row->name."</li> - <span style='font-family: Tahoma, Verdana, sans-serif; font-size:10px;'> ";
					echo "(<a href='EditCat.php?CatID=".$row->id."' style='color:#0c0'>edit</a> / <a href='javascript://' ";
					echo "onClick='AreYouSure = window.confirm(\"Are you sure you want to delete this category and publications?\"); ";
					echo "if(AreYouSure){window.location.href=\"EditCat.php?Process=DelCat&CatID=".$row->id."\";}' style='color:#f30'>delete</a>)</span> ";
					
					$qry_mag_numbers = "select id,description,mag_id,mag_no from mag_numbers where mag_id='".$row->id."' order by id desc";
					$db->execute_sql($qry_mag_numbers,$result_mag_numbers,$error_msg);
					if($error_msg <> "")
					{
						echo $error_msg;
					}
					else
					{
						echo "<ul>";
						while($row_mag_numbers = mysql_fetch_object($result_mag_numbers))
						{
							$qry_count = "select count(id) as page_count from mag_pages where mag_no_id='".$row_mag_numbers->id."'";
							$db->execute_sql($qry_count,$result_count,$error_msg);
							$row_count = mysql_fetch_object($result_count);
							echo "<li><a href='../Main.php?MagID=".$row_mag_numbers->mag_id."&MagNo=".$row_mag_numbers->id."' target='_blank'>";
							echo $row_mag_numbers->description."</a></li>";
							echo "<span style='font-family: Tahoma, Verdana, sans-serif; font-size:10px; color:#feea83'>(".$row_count->page_count." pages)</span> - ";
							echo "<span style='font-family: Tahoma, Verdana, sans-serif; font-size:10px'>(<a href='EditSubCat.php?SubCatID=".$row_mag_numbers->id."'";
							echo "style='color:#0c0'>edit</a> / <a href='javascript://' onClick='AreYouSure =";
							echo "window.confirm(\"Are you sure you want to delete this publication?\"); ";
							echo "if(AreYouSure){window.location.href=\"EditSubCat.php?Process=DelMag&SubCatID=".$row_mag_numbers->id."\"}'";
							echo "style='color:#f30'>delete</a>)</span>";
						}
						echo "</ul>";
					}	
				}
				echo "</ol>";
			}
		?>
        </td>
    </tr>
  </form>
</table>
<?php
include("Footer.php");
?>