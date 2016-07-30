// CONTROLADOR GESTION USUARIO ADMINISTRADOR

function CtrGestionUsuario ($scope, $http , ServicosKronos ) {
    
    $scope.tokenGestiosUsuarios = '080820150844userGestion';
    
    
    $scope.eliminarUsuario = function() {
               $http.post("https://script.google.com/macros/s/AKfycbw0LlxWm8by9wd5GtitKYbkUPU4sJx_BOt7REUibzqFh8ZpLvw/exec", { id: $scope.usuario.id } )
                         .success(function (resul) {
                             Alert.render("Se Ha Eliminado Con Exito El Usuario " + $scope.usuario.id )
                              $scope.usuario="";
                        })
                    .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario Invalido, Intente Nuevamente")
                            });  
 
              };

    $scope.consultarCentros = function() {
        $http.get("https://script.google.com/macros/s/AKfycbx2pT8Ma6-X7JK7Mqan4KAjM57G5hqcJzIvTUAsUp8hzEz32Lg/exec")
              .success(function (result) {
                    $scope.centros=result;
                 });                          
    };           
    
    $scope.modificarUsuario = function() {
               $http.post("https://script.google.com/macros/s/AKfycbwajNE1xxW8jwBeWc_dLjedUYRg-IO0G9kphrYs_QcNG2R6cNDp/exec",   $scope.usuario )
                         .success(function (resul) {
                             Alert.render("Se Actualizo Correctamente")
                             $scope.usuario="";
                        })
                        .error(function (data, status, headers, config)
                            {
                                Alert.render("Usuario No Registrado")
                            }); 
 
              };
    
    $scope.consultarUsuario = function() {
               $http.post("https://script.google.com/macros/s/AKfycbxnLj_p-HLPI7I6ZZyJ_ZGlRctNXqz2C7HPqumJQ5rtwwj1tXpT/exec", { id: $scope.usuario.id })
                         .success(function (resul) {
                             $scope.usuario.nombre=resul.NOMBRE;
                             $scope.usuario.apellido=resul.APELLIDO;
                             $scope.usuario.centroCosto=resul.ALMACEN;
                        })
                       .error(function (data, status, headers, config){
                                Alert.render("Usuario No Encontrado");
                        });  
 
              };
    
     $scope.restablecerClave = function() {
               
               $http.post("https://script.google.com/macros/s/AKfycbwyLyX1S7rT1iO3mdwYoG67D2EH9wHRYZhRP5ESn5GM0QjYsGDK/exec", {  id: $scope.usuario.id })
                         .success(function (resul) {
                             Alert.render("Se ha Restablecido La Clave Con Exito");
                             $scope.usuario="";
                        }).error(function (data, status, headers, config){
                             Alert.render("Ya Existe Un Usuario Con Clave Predeterminada");
                        });
 
              };
              
   $scope.guardarUsuario = function() {
                  $http.post("https://script.google.com/macros/s/AKfycbwM00WAJLJkbyhdoYjrysiZu_BMPQXFULsYpcVjfRBAYX-nbfwE/exec", $scope.usuario )
                         .success(function (resul) {
                             Alert.render("Usuario Ingresado Correctamente")
                             $scope.usuario="";
                         }).error(function (data, status, headers, config){
                                Alert.render("Error Ingresar Usuario");
                        });
                       
              };       
              
 }
  
 