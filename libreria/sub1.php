

   		  <div class="contenedorsubpro2">
          
        <?php if($row_Recordset1==NULL){ echo "<div class='contenedoradvertencia' align='center'><a hfer='javascript:history.back(1)'>Actualmente no hay productos en esta  subcategoria</a></div>";} else {?>
 <?php do { ?>
            <div id="contprod" align="center">
            	<div id="contimg">
                	<a href="ver_producto.php?id=<?php echo $row_Recordset1["id"];?>"><img src="images/productos/<?php echo $row_Recordset1["imagen"];?>" width="100" height="92"  border="0"/></a>
                </div>
                <div id="conttitulo"><a href="ver_producto.php?id=<?php echo $row_Recordset1["id"];?>"><?php echo $row_Recordset1["producto"];?></a></div>
                <div id="conttxtdes">
                	<div id="conttxtdesint" align="left"><b><div id="conttxt001">Material</div>
                	  <div id="conttxt002" align="right"><font size="-3"><?php echo $row_Recordset1["material"];?></font></div></b></div>
                    <div id="conttxtdesint" align="left"><b>
                    <div id="conttxt001">Ref</div>
                    <div id="conttxt002" align="right"><font size="-2"><?php echo $row_Recordset1["referencia"];?></font></div></b></div>
                    <div id="conttxtdesint" align="left"><b>
                    <div id="conttxt001">Valor</div>
                    <div id="conttxt002" align="right"><font color="#990000">$CO<?php echo number_format($row_Recordset1["valor"]);?></font></div></b></div>
                </div>
            </div>
             <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); } ?>
            
            
   		  </div>
  
  
  