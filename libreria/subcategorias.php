<?php $sql="SELECT * FROM subcategoria";
		@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($categoria=mysql_fetch_array($query)){
	?>
            <div id="contenedorbtn2" align="center"><a href="ver_subcategoria.php?id_subcategoria=<?php echo $categoria["id_subcategoria"];?>&id_categoria=<?php echo $_GET["id_categoria"]; ?>"><font color="#333333"><?php echo $categoria["subcategoria"];?></font></a></div>
            <?php } ?>