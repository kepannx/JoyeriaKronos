
function CtrLogeo($scope, $q, ServicosKronos, $log, $cookieStore, $location ,$http) {
    var inisioSesion = $q.defer();
    
    

    inisioSesion.promise.then(usrASesion);

    function usrASesion(usr) {
      $scope.usrConectado.almacen = usr.ALMACEN;
      $scope.usrConectado.perfil = usr.PERFIL;
      $scope.usrConectado.idAlmacen = $scope.usuario.nombreUsuario ;
      $scope.usrConectado.estaConectado = true;

      $log.info($scope.usrConectado);

      $cookieStore.put('estaConectado', true);
      $cookieStore.put('usuario', usr);

      $location.path('/Inicio');
    };

     $scope.enterLogin = function(keyCode){      
       if(keyCode==13){
         ingresar();
       } 
    }

    $scope.consultarCentros = function() {
        $http.get("https://script.google.com/macros/s/AKfycbx2pT8Ma6-X7JK7Mqan4KAjM57G5hqcJzIvTUAsUp8hzEz32Lg/exec")
              .success(function (result) {
                    $scope.centros=result;
                 });                          
    }; 


    $scope.iniciarLogeo = function() {
       ingresar();     
                                
               };

    function ingresar(){
       $http.post("https://script.google.com/macros/s/AKfycbxw5CSAZkjbO0LKVP4-Z6HIvWn4rxJDQL11_uYqOLhK2pE6HlRz/exec", { id: $scope.usuario.nombreUsuario, clave: $scope.usuario.clave})
                            .success(function (usr) {
                                  $scope.usrConectado.almacen = usr.ALMACEN;
                                  $scope.usrConectado.perfil = usr.PERFIL;
                                  $scope.usrConectado.idAlmacen = $scope.usuario.nombreUsuario;
                                  $scope.usrConectado.estaConectado = true;
                                  $cookieStore.put('estaConectado', true);
                                  $cookieStore.put('usuario', usr);
                                  $location.path('/inicio');    
                               })
                           .error(function ()
                                {
                                  Alert.render("Usuario Invalido")  
                                });
          } 
     };



