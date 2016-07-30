'use strict';

angular.module('kronosWeb').controller('controladorPincipal', function ($scope, $cookieStore, $location) {
    $scope.usrConectado = { almacen:"" , perfil: '', estaConectado: ''};

    var usr = $cookieStore.get('usuario');

    if (usr != null) {
      $scope.usrConectado.almacen = usr.ALMACEN;
      $scope.usrConectado.perfil = usr.PERFIL;
      $scope.usrConectado.estaConectado = true;
    };

    $scope.salir = function() {
      $scope.usrConectado = { almacen:"" , perfil: '', estaConectado: ''};

      $cookieStore.remove('estaConectado');
      $cookieStore.remove('usuario');

      $location.path('/');
    };

  });
