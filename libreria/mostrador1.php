<div class="contenedormostrario">
           
           
           <?php 
		   $sql="SELECT * FROM productos ORDER BY RAND() LIMIT 0,1";
		   @$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($producto=mysql_fetch_array($query)){
		   ?>
           <div class="contenedortitulos01" align="center">
       	    <a href="ver_producto.php?id=<?php echo $producto["id"];?>"><font color="#000000"><?php echo $producto["producto"];?></font></a></div>
            
            
            <div id="contenedorimagenproducto1" align="center">
            	<a href="ver_producto.php?id=<?php echo $producto["id"];?>"><img src="images/productos/<?php echo $producto["imagen"];?>" width="108" height="108"  border="0"/></a>
            
            </div>
            <div class="contenedorpropiedades1">
           	<div id="contenedorpropiedades1"><div id="contenedorpropiedad1">Material</div>
            <div id="contenedortxtpropiedad1" align="right"><?php echo $producto["material"];?></div></div>
            
            <div id="contenedorpropiedades1">
              <div id="contenedorpropiedad1">Ref:</div>
            <div id="contenedortxtpropiedad1" align="right"><?php echo $producto["referencia"];?></div></div>
            
            <div id="contenedorpropiedades1">
              <div id="contenedorpropiedad1">Valor</div>
            <div id="contenedortxtpropiedad1" align="right"><font color="#990000"><b>$CO <?php echo number_format($producto["valor"]);?></b></font></div></div>
            
            </div>
            <?php } ?>
          </div>
          <div class="contenedorvercatalogo"><a href="asesoras.php"><img src="images/ver_catalogo.jpg" border="0" /></a></div>