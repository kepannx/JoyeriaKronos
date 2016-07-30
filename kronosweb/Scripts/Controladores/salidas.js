// CONTROLADOR SALIDAS

function CtrSalidas ($scope, $http , $cookieStore, ServicosKronos , $location ) {
    $scope.habilitarContenido=false;
     $scope.activarReimprimir=false;
     $scope.button_clicked=true;
     $scope.fechaSalida=new Date().getTime();
     var centroActual;
    $scope.total=0;
     var uid =1;
    $scope.numero=453465657;
   $scope.productos =  [{id: 0,'Codigo':'','Referencia': '','Cantidad':0,'DescripcionGrupo':''}];


    $scope.habilitarSalida = function () {
        habilitar();     
    }
    

    $scope.enterHabilitar = function(keyCode){      
       if(keyCode==13){
         habilitar();
       } 
    }
    
    function habilitar() {
        if( $scope.salida.vendedora != 'abc123' ){
       $http.post("https://script.google.com/macros/s/AKfycbwQAKAEDvn09fC42njTmJv8FgvozmqALK6dZGC6Mbk0Xt5h9BE/exec" ,{ clave : $scope.salida.vendedora })
                         .success(function (resul) {
                             $scope.habilitarContenido=true;
                             $scope.vendedorLogeado=resul.NOMBRE;
                             $scope.salida.vendedora=resul.ID;
                             centroActual=resul.CENTRO;
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario No valido Intente De Nuevo")
                            });
        }else{
            Alert.render("Por Favor Cambiar Clave  Predeterminada");
            $scope.cotizacion.vendedora="";
        }              
    }
    
    $scope.agregarProducto = function () {
        agregarEan();     
    }
    

    $scope.enterProducto = function(keyCode){      
       if(keyCode==13){
         agregarEan();
       } 
    }
    
     function agregarEan() {
       $http.post("https://script.google.com/macros/s/AKfycbzjb8rPFq2lx0UmS3YwH2xx67TSEtccg7eM_POo7P_bnhEjMj0/exec" ,{ ean : $scope.productoConsultar.ean} )
                         .success(function (resul) {
                             $scope.eliminarProducto(0)
                              $scope.newProducto.Codigo=resul.Codigo
                              $scope.newProducto.Referencia=resul.Referencia;
                              $scope.newProducto.DescripcionGrupo=resul.DescripcionGrupo;
                              $scope.newProducto.Cantidad=  $scope.productoConsultar.cantidad;
                              $scope.newProducto.id = uid++ ;
                              $scope.total= $scope.newProducto.Cantidad +$scope.total;
                              $scope.productos.push($scope.newProducto);
                              $scope.newProducto = {};
                              $scope.productoConsultar.ean="";
                              $scope.productoConsultar.cantidad=0;
                              document.getElementById("ean").focus();
                              $scope.activarReimprimir=true;
                              
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("EAN No Encontrado, Intente De Nuevo");
                                location.reload();
                            });
    }

    
    $scope.eliminarProducto = function (id) {
        
        for (i in $scope.productos) {
            if ($scope.productos[i].id == id) {
                $scope.total= $scope.total - $scope.productos[i].Cantidad;
                $scope.productos.splice(i, 1);
               
            }
        }
        
        if (0 == id) $scope.newProducto = {};
    }
    
    
    
    $scope.generarSalida = function (){
         $scope.button_clicked=false;
         //mirar para cuando el ean no esta , si es el ean esta lo actualiza correctamente.
          $http.post("https://script.google.com/macros/s/AKfycbz_FwAXY1zkCZ4OtiqbVTFSQiz9CIw7bs5XsLrc6GoZUE8eURo/exec" ,
                        {  almacen:centroActual ,  vendedora: $scope.salida.vendedora ,  productos: $scope.productos  })
                         .success(function (resul) {
                         $scope.idSalida=resul;     
                         window.setTimeout(imprimirCotizacion, 1000);
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("No Hay Productos Disponibles");

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

/*7703365047934
7703365047941
7703365141762
7703365140154
7703365136973
7703365085431
7703365140161
7703365134863

7703365047958
7703365085356
7703365085554
7703365085523
7703365123522


7703365128800
7703365141724
7703365141700
7703365136942
7703365128671
7703365141731
7703365023495
7703365023143
7703365073223
7703365140321
7703365140185
7703365140192
7703365031438
7703365059135
7703365005323
7703365134832*/




   
   
 

  
 