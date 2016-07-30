// CONTROLADOR COTIZACIONES

function CtrCotizaciones ($scope, $http , $cookieStore, ServicosKronos , $location ) {
     $scope.habilitarContenido=false;
     $scope.activarReimprimir=false;
     $scope.button_clicked = true;
     $scope.fechaCotizacion=new Date().getTime();
      $scope.cargoPrimerProducto=false;
      var centroActual;
     $scope.total=0;
     var uid =1;
    $scope.numero=453465657;
    $scope.productos =  [{id: 0,'Codigo':'','Referencia': '', 'Descripcion': '','Cantidad':0,'ValUnitario':'0','DescripcionGrupo':''}];
   //evento init para eliminar el primer null
    //if (0 === id) $scope.newProducto = {};

    $scope.habilitarCotizacion = function () {
        habilitar();     
    }
    

    $scope.enterHabilitar = function(keyCode){      
       if(keyCode==13){
         habilitar();
       } 
    }
     
    $scope.enterProducto = function(keyCode){      
       if(keyCode==13){
         agregarEan();
       } 
    }

      $scope.enterIdentificacion = function(keyCode){      
       if(keyCode==13){
         buscarCotizacionCedula();
       } 
    }
   
    $scope.agregarProducto = function () {
        agregarEan();
    }

    $scope.buscarCedula = function(){
        
        buscarCotizacionCedula();
    }
    
    $scope.eliminarProducto = function (id) {
        
        for (i in $scope.productos) {
            if ($scope.productos[i].id == id) {
                $scope.total= $scope.total - $scope.productos[i].ValUnitario;
                $scope.productos.splice(i, 1);
               
            }
        }
        
        if (0 == id) $scope.newProducto = {};
    }
    
    
    
    $scope.generarCotizacion = function ()
    {
         $scope.button_clicked=false;
          $http.post("https://script.google.com/macros/s/AKfycbz1lTuH7rHh-L2n41-i0a2PqeFsiAcO58US30blbystITuJseOo/exec" ,
                        {idAlmacen:centroActual ,  datos :$scope.cotizacion , productos: $scope.productos} )
                         .success(function (resul) {
                             $scope.cotizacionGuardada="http://www.barcodesinc.com/generator/image.php?code="+resul+"&style=197&type=C128B&width=200&height=80&xres=1&font=3";
                                 window.setTimeout(imprimirCotizacion, 2000);                
                         Alert.render("Cotización Generada Exitosamente")
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("EAN No Encontrado, Intente De Nuevo")
                            });
                            
                                                 
    }
    
    $scope.reimprimirCotizacion = function ()
    {
          
            imprimirCotizacion();                                     
    }

    function agregarEan(){
        $http.post("https://script.google.com/macros/s/AKfycbzjb8rPFq2lx0UmS3YwH2xx67TSEtccg7eM_POo7P_bnhEjMj0/exec" ,{ ean : $scope.productoConsultar.ean} )
        .success(function (resul) {
             $scope.eliminarProducto(0)
              $scope.newProducto=resul;
              $scope.newProducto.id = uid++ ;
              $scope.newProducto.Cantidad= 1;
              //$scope.newProducto.Codigo="http://www.barcodesinc.com/generator/image.php?code="+resul.Codigo+"&style=197&type=C128B&width=200&height=80&xres=1&font=3";
              $scope.newProducto.Codigo=resul.Codigo
              //$scope.cotizacionGuardada="http://www.barcodesinc.com/generator/image.php?code=12&style=197&type=C128B&width=200&height=80&xres=1&font=3";
              $scope.total= ($scope.newProducto.Cantidad * resul.ValUnitario)+$scope.total;
              $scope.productos.push($scope.newProducto);
              $scope.newProducto = {};
              $scope.productoConsultar.ean=""
              $scope.cargoPrimerProducto=true;
              
            })
        .error(function (data, status, headers, config){
            Alert.render("EAN No Encontrado, Intente De Nuevo")
            });
    }

    function habilitar(){
       if( $scope.cotizacion.vendedora != 'abc123' ){
           $http.post("https://script.google.com/macros/s/AKfycbwQAKAEDvn09fC42njTmJv8FgvozmqALK6dZGC6Mbk0Xt5h9BE/exec" ,{ clave : $scope.cotizacion.vendedora })
                             .success(function (resul) {
                                 $scope.habilitarContenido=true;
                                 $scope.vendedorLogeado=resul.NOMBRE;
                                 $scope.cotizacion.vendedora=resul.ID;
                                 centroActual=resul.CENTRO;

                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario No valido Intente De Nuevo");
                            });
        }else{
            Alert.render("Por Favor Cambiar Clave  Predeterminada");
            $scope.cotizacion.vendedora="";
        }      
    }
    
    function buscarCotizacionCedula(){
        $http.post("https://script.google.com/macros/s/AKfycbwdYbFJk6IuHDWJdxXlf50hxePmTJhUoBBBxQFlxssE5zGl9Hw/exec" , 
          { centro : centroActual  , cedula : $scope.cotizacion.idUsuario })
             .success(function (resul) {
                 $scope.total=0;
                 $scope.cotizacionGuardada ="http://www.barcodesinc.com/generator/image.php?code="+resul.idCotizacion+"&style=197&type=C128B&width=200&height=80&xres=1&font=3";
                 $scope.cotizacion=resul.cliente;
                  $scope.productos=resul.productos;
                 for (i in $scope.productos) {
                        $scope.productos[i].Cantidad=1;
                        $scope.total= $scope.total + $scope.productos[i].ValUnitario;
                    }
                $scope.activarReimprimir=true;
            })
        .error(function (data, status, headers, config)
                {
                    Alert.render("Cliente No Valido Intentelo De Nuevo")
                });
    }

    function imprimirCotizacion(){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById('imprimeme').innerHTML;
     	document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
        location.reload();
    }
}




   
   
 

  
 