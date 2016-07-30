// CONTROLADOR ENTREGAS

function CtrEntregas ($scope, $http , $cookieStore, ServicosKronos , $location ) {
   
    $scope.habilitarContenido=false;
    $scope.total=0;
    $scope.identificadorCotizacion=0;
     $scope.button_clicked=true;
     var centroActual;
     var uid =1;
       
         
   $scope.productos =  [{id: 0,'Codigo':'','Referencia': '', 'Descripcion': '','Cantidad':0,'ValUnitario':0,'DescripcionGrupo':''}];
   //evento init para eliminar el primer null
    //if (0 === id) $scope.newProducto = {};

        $scope.habilitarEntrega = function () {
        habilitar();     
      }
    

    $scope.enterHabilitar = function(keyCode){      
       if(keyCode==13){
         habilitar();
       } 
    }

    $scope.enterIdCotizacion = function(keyCode){      
       if(keyCode==13){
         buscadIdCotizacion();
       } 
    }

    $scope.consultarCotizacion = function () {
       buscadIdCotizacion();
    }

    $scope.enterIdCedula = function(keyCode){      
       if(keyCode==13){
         buscarIdCedula();
       } 
    }
    
    $scope.buscarCedulaEntrega = function(){
        buscarIdCedula();
    }

    function buscarIdCedula(){
        $http.post("https://script.google.com/macros/s/AKfycbwdYbFJk6IuHDWJdxXlf50hxePmTJhUoBBBxQFlxssE5zGl9Hw/exec" ,
                                   { centro : centroActual , cedula : $scope.clienteBuscado.idUsuario })
                         .success(function (resul) {
                             $scope.total=0;
                             $scope.idCotizacionBuscar==resul.idCotizacion;
                             $scope.identificadorCotizacion=resul.idCotizacion;
                             $scope.clienteBuscado=resul.cliente;
                              $scope.productos=resul.productos;
                             for (i in $scope.productos) {
                                    $scope.total= $scope.total + $scope.productos[i].ValUnitario;
                                }
                            $scope.activarReimprimir=true;
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario Invalido Intentelo De Nuevo")
                            });
        
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
    
    
    
    $scope.generarEntrega = function ()
    {

         $scope.button_clicked=false;
          $scope.datos  ={idCotizacion: $scope.identificadorCotizacion ,'vendedor':$scope.vendedorLogeadoId,'almacen': centroActual, 'factura': $scope.facturaFlamingo};
          console.log($scope.datos);
            $http.post("https://script.google.com/macros/s/AKfycbwOTZCsdGrdvYVImTEb789wBy6LiFNCFR-XA5xr57LV_j8YYTMJ/exec" ,
                        {datosFactura :$scope.datos , productos: $scope.productos} )
                         .success(function (resul) {
                            Alert.render("Felicitaciones Has Realizado Una Venta Por: " + $scope.total )
                            $location.path('/Inicio');
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Error Al Ingresar La Venta;Productos NO Estan En El Inventario")
                            });
        
    }

    function habilitar(){
    if( $scope.Vendedora != 'abc123' ){
       $http.post("https://script.google.com/macros/s/AKfycbwQAKAEDvn09fC42njTmJv8FgvozmqALK6dZGC6Mbk0Xt5h9BE/exec" ,{ clave : $scope.Vendedora })
                         .success(function (resul) {
                             $scope.habilitarContenido=true;
                             $scope.vendedorLogeado=resul.NOMBRE;
                             $scope.vendedorLogeadoId=resul.ID;
                              centroActual=resul.CENTRO;
                            // $scope.cotizacion.vendedora=resul.ID;
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario Invalido Intentelo De Nuevo")
                            });

         }else{
            Alert.render("Por Favor Cambiar Clave  Predeterminada");
            $scope.Vendedora="";
        }    
    }

    function buscadIdCotizacion(){
        $http.post("https://script.google.com/macros/s/AKfycbzygGfUrrp70sk-Cm_IRQRHyNabvADJKgoBBCKvYnBRtBTLK9ib/exec" , 
                { idCotizacion : $scope.idCotizacionBuscar , centro : centroActual })
             .success(function (resul) {
                 $scope.total=0;
                 $scope.identificadorCotizacion=$scope.idCotizacionBuscar;
                 $scope.clienteBuscado=resul.cliente;
                  $scope.productos=resul.productos;
                 for (i in $scope.productos) {
                        $scope.total= $scope.total + $scope.productos[i].ValUnitario;
                    }
            })
        .error(function (data, status, headers, config)
                {
                    Alert.render("Cotizaciòn  No Valida , Intentelo De Nuevo")
                    $scope.clienteBuscado="";
                    $scope.productos="";
                });
    }
    
}
   