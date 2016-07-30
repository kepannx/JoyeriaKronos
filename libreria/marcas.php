<?php $sqlreloj="SELECT * FROM  relojes";
		@$queryreloj=mysql_db_query($database_joyeria,$sqlreloj,$joyeria);
		while($relojes=mysql_fetch_array($queryreloj)){
				?>
            <div id="contenedorimagenproducto3" align="center">
            <a href="ver_relojes.php?id_marca=<?php echo $relojes["id_marca"];?>&id_subcategoria=<?php echo $_GET["id_subcategoria"]; ?>"><img src="images/marcas/<?php echo $relojes["imagen"];?>" width="108" height="108"  border="0"/></a>
            
            </div>
            <?php }  ?>