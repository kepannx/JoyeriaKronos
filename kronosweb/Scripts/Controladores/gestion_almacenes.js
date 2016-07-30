// CONTROLADOR GESTION USUARIO ADMINISTRADOR

function CtrGestionUsuario ($scope, $http , ServicosKronos ) {
      
    
    $scope.eliminarAlmacen = function() {
               $http.post("https://script.google.com/macros/s/AKfycbyG3c9zHcZAlPdltjZAPgDgGnER9MMbqv4gPAZq93_nqIMCTSw/exec", { id: $scope.almacen.id } )
                         .success(function (resul) {
                             Alert.render("Se Ha Eliminado Con Exito El Almacen " + $scope.almacen.id )
                              $scope.almacen="";
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Almacen Invalido, Intente Nuevamente")
                            });  
 
              };
    
    $scope.modificarAlmacen = function() {
               $http.post("https://script.google.com/macros/s/AKfycbyWMqec-9EC5Qb9yhc4KkhbXEWdOfJwo-SI4hMCYLHQRV3NSpU/exec",   $scope.almacen )
                         .success(function (resul) {
                             Alert.render("Se Actualizo Correctamente")
                             $scope.usuario="";
                        })
                        .error(function (data, status, headers, config)
                            {
                                Alert.render("Almacen No Registrado")
                            }); 
 
              };
    
    $scope.consultarAlmacen = function() {
               $http.post("https://script.google.com/macros/s/AKfycbwaZ9HAOj3cNmqBMfa8EADS5TqEZMTWp-wJUsVAkrU9gQ7ESCo/exec", { centro: $scope.almacen.id })
                         .success(function (resul) {
                             $scope.almacen.nombre=resul.NOMBRE;
                             $scope.almacen.clave=resul.CLAVE;
                        })
                       .error(function (data, status, headers, config){
                                Alert.render("Almacen No Encontrado");
                                $scope.almacen.nombre="";
                                $scope.almacen.clave="";
                        });  
              };

   $scope.guardarAlmacen = function() {
                  $http.post("https://script.google.com/macros/s/AKfycbwyH4UkgAVpWN0k12YYf1htxZ4fraKrEDUq1x-oLFErlmN7DA0/exec", $scope.almacen )
                         .success(function (resul) {
                             Alert.render("Almacen Ingresado Correctamente")
                             $scope.almacen="";
                         }).error(function (data, status, headers, config){
                                Alert.render("Error Ingresar Almacen");
                        });
                       
              };       
              
 }
  
 