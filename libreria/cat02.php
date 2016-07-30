<?php 
		$sql="SELECT * FROM categorias";
		@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($categoria=mysql_fetch_array($query)){
	?>
    <div id="contenedorbtn1" align="center"><a href="ver_productos.php?id_categoria=<?php echo $categoria["id_categoria"];?>&id_subcategoria=<?php echo $_GET["id_subcategoria"];?>"><font color="#333333" size="-1"><?php echo $categoria["categoria"];?></font></a></div>
    <?php } ?>