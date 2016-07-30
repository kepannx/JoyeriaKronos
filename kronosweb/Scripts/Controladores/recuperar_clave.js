// CONTROLADOR CAMBIAR CONTRASEÑA USUARIO

function CtrRecuperar ($scope, $http , ServicosKronos ) {
   


   $scope.cambiarClave = function() {
       

                            
               $http.post("https://script.google.com/macros/s/AKfycbyIiIjCgBPE8x0tSjDcmLjgZgSU64VFgyZlmwS3axJSixOlUOQf/exec", $scope.cambiar )
                         .success(function (resul) {
                             Alert.render("Se Ha Cambiado Con Exito La Clave El Usuario " )
                             $scope.cambiar="";
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario Invalido, Intente Nuevamente")
                     }); 
               
 
              };
};
  
 