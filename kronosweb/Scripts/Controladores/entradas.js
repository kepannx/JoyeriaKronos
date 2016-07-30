// CONTROLADOR ENTRADAS REMISIONES

function CtrEntradas ($scope, $http , $cookieStore, ServicosKronos , $location ) {
    
     $scope.habilitarContenido=false;
     $scope.activarBoton=false;
     $scope.button_clicked=true;
     var centroActual;
     
   $scope.productos =  [{}];

    $scope.habilitarEntrada = function () {
        habilitar();     
    }
    

    $scope.enterHabilitar = function(keyCode){      
       if(keyCode==13){
         habilitar();
       } 
    }
    
    function habilitar() {
        if( $scope.entrada.vendedora != 'abc123' ){
       $http.post("https://script.google.com/macros/s/AKfycbwQAKAEDvn09fC42njTmJv8FgvozmqALK6dZGC6Mbk0Xt5h9BE/exec" ,{ clave : $scope.entrada.vendedora })
                         .success(function (resul) {
                             $scope.habilitarContenido=true;
                             $scope.vendedorLogeado=resul.NOMBRE;
                             $scope.entrada.vendedora=resul.NOMBRE;
                             $scope.entrada.vendedoraId=resul.ID;
                             centroActual=resul.CENTRO;
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario No valido Intente De Nuevo")
                            });
         }else{
            Alert.render("Por Favor Cambiar Clave  Predeterminada");
            $scope.entrada.vendedora="";
        }             
    }

    $scope.buscarRemision = function () {
        remision();     
    }
    

    $scope.enterRemision = function(keyCode){      
       if(keyCode==13){
         remision();
       } 
    }

    
     
    function remision() {
        $scope.total=0;
       $http.post("https://script.google.com/macros/s/AKfycbxwCOfLEwZ6jSB6hBW_bluTZTnrEh5EacSrkAu0Z0xYWCgpFdM/exec" ,{ numRemision : $scope.entrada.numRemision , idAlmacen:centroActual} )
                         .success(function (resul) {
                              if ( resul.length > 0 ){  
                                  $scope.productos=resul;
                                  for (i in $scope.productos) {
                                        $scope.total= $scope.total + parseInt($scope.productos[i].Cantidad);
                                 }
                                $scope.activarBoton=true; 
                            }else{
                                Alert.render("Remisión no valida,Ingresar Nuevamente")
                            }    
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Remisión No Encontrada, Intente De Nuevo")
                            });
    }

    $scope.generarEntrada = function ()
    {                 
          $scope.button_clicked=false;
          $http.post("https://script.google.com/macros/s/AKfycbw5XaWMO9L4obKuliiwfQ7ViaXAGR3NF5OKyVgco49gwwN8TvE/exec" ,
                        {idAlmacen:centroActual ,  idVendedora :$scope.entrada.vendedoraId , numRemision : $scope.entrada.numRemision ,nombreVendedora:$scope.entrada.vendedora } )
                         .success(function (resul) {
                         $location.path('/Inicio');
                         Alert.render("Entrada Remision Fue Exitosa")         
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Remision Ya Ingresada")
                                $scope.button_clicked=true;
                            });
                            
                                                 
    }
    
    
}




   
   
 

  
 