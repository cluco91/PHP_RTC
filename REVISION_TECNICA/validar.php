<?php

class validar {

/*Atributos del Rut*/
public $rut; /*rut que recibe del formulario*/
public $d;   /*digito verificador recibido del formulario*/
private $dp; /*digito verificador calculado en el metodo valida_rut() para comparar*/

/*Metodo valida_rut()*/
public function valida_rut($r, $d){
    $this->rut=$r;
    $this->d=$d;
    
    $ruti = strrev($r); /*doy vuelta el numero del rut sin verificador*/
        $arreglo = str_split($ruti);
        $len = strlen($ruti); /*determino el largo del rut sin verificador invertido*/
        $serie = 2;
        $suma = 0;
        for ($i=0; $i<$len ; $i++){
        $suma = $suma + ($arreglo[$i] * $serie);
        $serie++;
        if ($serie > 7){
        $serie = 2;
        }
        }
        $resto = $suma % 11;
        $dv = 11 - $resto;        
        if ($dv >= 1 or $dv <= 9){    
        $dp = $dv;     
        } else{
        if ($dv == 11){
        $dp = 0;
        }else{
        if ($dv == 10){
            $dp = "k";
        }      
    }
}    
    if ($d == $dp){
        return TRUE;
    }  else {
        return FALSE;
    }
}


}
