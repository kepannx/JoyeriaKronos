// CONTROLADOR COTIZACIONES

function CtrConteosInventario ($scope, $http , $cookieStore, ServicosKronos , $location ) {
     $scope.habilitarContenido=false;
     $scope.activarReimprimir=false;
     $scope.button_clicked=true;
     $scope.fechaCotizacion=new Date().getTime();
      $scope.cargoProductos=false;
     $scope.total=0;
     var uid =1;
     var centroActual;
    $scope.numero=453465657;
    $scope.productos = {};

    $scope.habilitarConteos = function () {
        habilitar();     
    }
    

    $scope.enterHabilitar = function(keyCode){      
       if(keyCode==13){
         habilitar();
       } 
    }

    function habilitar() {
         if( $scope.inventarios.vendedora != 'abc123' ){
       $http.post("https://script.google.com/macros/s/AKfycbwQAKAEDvn09fC42njTmJv8FgvozmqALK6dZGC6Mbk0Xt5h9BE/exec" ,{ clave : $scope.inventarios.vendedora })
                         .success(function (resul) {
                             $scope.habilitarContenido=true;
                             $scope.vendedorLogeado=resul.NOMBRE;
                             centroActual=resul.CENTRO;
                             cargarGrupos();
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
     

    function cargarGrupos(){
        $http.post("https://script.google.com/macros/s/AKfycby3uIV9y1ESdXJg5PkOWpqfRdQPJyr3Kg7GqWaBHTYrVApdGwqr/exec" , 
                                {     almacen:centroActual })
                         .success(function (resul) {
                                   $scope.productos=resul;
                                   $scope.cargoProductos=true;
                        })
                    .error(function (data)
                            {
                                Alert.render("No Se Pudo Cargar Los Productos");
                                $location.path('/Inicio');
                            });
        
    }
    
    
    
    
    $scope.guardarConteo = function ()
    {
        $scope.button_clicked=false;
        Alert.render("Se Registro Correctamente El Conteo")
        $location.path('/Inicio');
        var conteoExitoso = true;
        for (i in $scope.productos) {
           if( $scope.productos[i].CantidadActual != $scope.productos[i].UnidadesContadas ){
            conteoExitoso=false;                
           };
        };
        if (conteoExitoso){
           var datos={"almacen":centroActual,"vendedora":$scope.vendedorLogeado}
            $http.post("https://script.google.com/macros/s/AKfycbwKiVOAcjX1KSxlpG9oXpTr2ZVm6nvRzZ0vpcU1AyfLOvK6Fjh9/exec" ,
            { datos : datos}  ) ;

        }else{
            var datos={"almacen":centroActual,"vendedora":$scope.vendedorLogeado ,"cantidadProductos":$scope.productos.length}
            $http.post("https://script.google.com/macros/s/AKfycbz-7ICRkGSN0y2jmOSCe1yeqzbQEyhnF2P50X4mfrYvCu_GWaA/exec" ,
            { datos : datos  , productos : $scope.productos }  ) ;
        }

         /* $http.post("https://script.google.com/macros/s/AKfycbzLFhxtth_48Syilh7WpC7QeGiY73pgKpOoTcprDPok1RycXGNA/exec" ,
                         $scope.productos )
                         .success(function (resul) {
                        })
                    .error(function (data, status, headers, config)
                            {
                            });
           */                 
                                                 
    }
    
    $scope.imprimirInventario = function ()
    {
          
            imprimirFtoInventario();                                     
    }
    
    
    function imprimirFtoInventario(){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById('imprimeme').innerHTML;
     	document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
        location.reload();
    }
}




   
   
 

  
 