
function validar_vehiculo(){
    
    var patente = document.getElementById("ptnt").value;
    var  anno = document.getElementById("annou").value;
    var km = document.getElementById("kms").value;


    if (patente == null || patente.length){
        alert("Debe ingresar una patente");
        return false;
    }
    
    if (anno == null || anno.length){
        alert("Debe ingresar una patente");
        return false;
    }else{
        if (isNaN(anno)){
            alert ("Debe ingresar un valor numerico");
            return false;
        }
    }
    
    if (km == null || km.length){
        alert("Debe ingresar una patente");
        return false;
    }else{
        if (isNaN(km)){
            alert("Debe ingresar un valor numerico");
            return false;
        }
    }
}