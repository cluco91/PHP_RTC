
function validar_persona (){
    var rut = document.getElementById("rut").value;
    var dv = document.getElementById("dv").value;
    var n1 = document.getElementById("nombre1").value;
    var n2 = document.getElementById("nombre2").value;
    var ap1 = document.getElementById("apellido1").value;
    var ap2 = document.getElementById("apellido2").value;
    var dir = document.getElementById("direccion").value;
    var fono = document.getElementById("fono").value;
    var correo = document.getElementById("correo").value;
    var pass = document.getElementById("contrasena").value;
    
 
    /*RUT*/
    if (rut == null || rut.length == 0){
        alert ("Debe ingresar un rut sin digito verificador");
        return false;
    }
    /*FIN RUT*/
    
    /*DIGITO VERIFICADOR*/
    if (dv == null || dv.length == 0){
        alert ("Debe ingresar un digito verificador");
        return false;
    }
    /*FIN DIGITO VERIFICADOR*/
    
    /*PRIMER NOMBRE*/
    if (n1 == null || n1.length == 0){
        alert ("Debe ingresar un Primer Nombre");
        return false;
    }
    /*FIN PRIMER NOMBRE*/
    
    /*SEGUNDO NOMBRE*/
    if (n2 == null || n2.length == 0){
        alert ("Debe ingresar un Segundo Nombre");
        return false;
    }
    /*FIN SEGUNDO NOMBRE*/
    
    /*PRIMER APELLIDO*/
    if (ap1 == null || ap1.length == 0){
        alert ("Debe ingresar un Primer Apellido");
        return false;
    }
    /*FIN PRIMER APELLIDO*/
    
    /*SEGUNDO APELLIDO*/
    if (ap2 == null || ap2.length == 0){
        alert ("Debe ingresar un Segundo Apellido");
        return false;
    }
    /*FIN SEGUNDO APELLIDO*/
    
      /*DIRECCION*/
    if (dir == null || dir.length == 0){
        alert ("Debe ingresar una Direccion");
        return false;
    }
    /*FIN DIRECCION*/
    
    /*FONO*/
    if (fono == null || fono.length == 0){
        alert("Debe ingresar un numero de telefono");
        return false;
    }else{
      if (isNaN(fono)){
        alert("Debe ingresar un valor numerico");
        return false;
    }     
    }   
    /*FIN FONO*/
    
    /*CORREO*/
    if(correo == null || correo.length == 0){
     alert("Debe ingresar un correo electronico");
     return false;
    }
    /*FIN CORREO*/
    
    /*PASSWORD*/
    if (pass = null || pass.length == 0){
        alert ("Debe ingresar una contrasena");
        return false;
    }
    
    /*FIN PASSWORD*/
    
    
}

