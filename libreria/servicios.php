<br /><br /><br /><br /><br />
<?php 
		$sql="SELECT * FROM servicios";
		@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($categoria=mysql_fetch_array($query)){
				
				?>      
            <div id="contenedortxt">
      <div id="iconocont"><img src="images/icono.gif" /></div><div id="txtder"><a href="ver_servicios.php?id_servicio=<?php echo $categoria["id_servicio"]; ?>"><?php echo $categoria["servicio"]; ?></a></div></div>
      <?php } ?>