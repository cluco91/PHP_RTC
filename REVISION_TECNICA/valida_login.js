function validar_login(){     
var rut = document.getElementById("rut").value;
var dv = document.getElementById("dv").value;
var clave = document.getElementById("pass").value;

//alert ("La clave es: "+clave);

/*Fin Digito verificador*/

/*Primero se ve la Clave*/
if (clave == null || clave.length == 0){
    alert ("Debe ingresar una clave");
    return false;
}
/*Fin Clave*/

/*Segundo se ve el rut*/
if(rut == null || rut.length == 0){
alert("Debe ingresar su rut");    
return false;
 }else {     
if(isNaN(rut)){
alert("Debe ingresar solo numeros sin puntos ni guion");
return false;
     }else {        
if(rut.length != 8 && rut.length != 7){
alert("El formato del rut es incorrecto Solo admite 8 o 7 digitos");
return false;
		}
	}     
} 
/*Fin Rut*/

/*Tercero se ve el Digito Verificador*/
if(dv == null || dv.length == 0){ 
alert("Debe ingresar un numero 0-9 o K/k");
return false;  
}else{
if(dv >= 0 && dv <= 9){  
return true;    
}else{        
if(dv == "k" || dv == "K" ){            
return true;        
}else{           
alert ("caracter no valido");             
return false;         
        }    		
    }   
}

}
 





