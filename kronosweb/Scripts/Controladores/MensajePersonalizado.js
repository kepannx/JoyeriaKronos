
 function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "aling-block";
        dialogoverlay.style.height = winH+"px";
        
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        /*dialogbox.style.top = "1000px";*/
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Excelencia Operacional Muestreo para Recepción";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxbody').innerHTML = 'Documentos a Recibir: <input id=doc_muestrales type=number>';
        document.getElementById('dialogboxfoot').innerHTML = '<button class="btn btn-danger" onclick="Alert.ok()">Cerrar</button> <button id=Calc_muestreo class="btn btn-success"onclick="Alert.calcularm()">Calcular</button>';
      
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
    
    this.calcularm = function(){
    /*obtenemos el valor del tamaño del universo para calcular la muestra*/
    var valor = document.getElementById("doc_muestrales").value;
    var universo = parseInt(valor);
    /*definimos nuevos */
        
        var probabilidad = 0.95;
        
        var Zconfianza90 = 1.64;
        var Zconfianza95 = 1.96;
        var Zconfianza97 = 2.17;
        var Zconfianza99 = 2.58;
        
        var error6=0.06;
        var error5=0.05;
        var error4=0.04;
        var error3=0.03;
        
        /*formula muestreo ((probabilidad*(1-probabilidad)*((zconfianza/error)^2)))/(1+((probabilidad*(1-probabilidad)*((zconfianza/error)^2))/universo))*/
        
       var confianza95 = ((probabilidad * (1-probabilidad) * (Math.pow(Zconfianza95/error5,2)))/(1+((probabilidad*(1-probabilidad)* (Math.pow(Zconfianza95/error5,2))/universo))));   
           confianza95= confianza95.toFixed(0);           
           
       document.getElementById('dialogboxbody').innerHTML = 'Audita una Muestra de'+" "+confianza95 + ' Documentos o Contenedores' ;
 
	}
        
}
var Alert = new CustomAlert();
  