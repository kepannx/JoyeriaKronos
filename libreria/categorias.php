<div class="contenedortitulos01" align="center">Categorias</div>
<?php 
		$sql="SELECT * FROM subcategoria";
		@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($categoria=mysql_fetch_array($query)){
				
				?>      
            <div id="contenedortxt">
      <div id="iconocont"><img src="images/icono.gif" /></div><div id="txtder"><a href="ver_subproducto.php?id_subcategoria=<?php echo $categoria["id_subcategoria"]; ?>"><?php echo $categoria["subcategoria"]; ?></a></div></div>
      <?php } ?>