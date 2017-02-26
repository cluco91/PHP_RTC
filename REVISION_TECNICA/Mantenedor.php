<?php

class Mantenedor {
    
    /*Datos Personas*/
    public $rut;   /*Rut*/
    public $n1;     /*Primer Nombre*/
    public $n2;     /*Segundo Nombre*/
    public $a1;     /*Primer Apellido*/
    public $a2;     /*Segundo Apellido*/
    public $dir;    /*Direccion*/
    public $fono;   /*Fono*/
    public $correo; /*Correo*/
    public $idg;    /*ID Genero*/
    public $pass;   /*Password*/
    
    /*Datos Vehiculo*/
    public $patente; /*Patente*/
    public $anno;    /*Año*/
    public $km;      /*Kilometraje*/
    public $idm;     /*ID Modelo*/
    
    public $conexion;
    
    public function insertar($rut,$n1,$n2,$ap1,$ap2,$dir,$fono,$correo,$idg,$pass,$conexion){
        
        $this->rut = $rut; $this->n1 = $n1; $this->n2 = $n2; $this->a1 = $ap1; $this->a2 = $ap2;
        $this->dir = $dir; $this->fono = $fono; $this->correo = $correo; $this->idg = $idg;
        $this->pass = $pass; $this->conexion = $conexion;
        
        /*Ahora la consulta*/
        $consulta = "INSERT INTO tbl_persona (rut, nombre_1, nombre_2, apellido_1, apellido_2, direccion, fono, email, id_genero, contrasena)".
        "VALUES ('$this->rut', '$this->n1', '$this->n2', '$this->a1', '$this->a2', '$this->dir', '$this->fono', '$this->correo', '$this->idg', '$this->pass')";        
        $this->conexion->query($consulta);
        $finsertadas = $this->conexion->affected_rows;      
        if($finsertadas > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function insertar_v($patente,$anno,$km,$idm,$conexion){
    $this->patente = $patente; $this->anno = $anno; $this->km = $km;
    $this->idm = $idm; $this->conexion = $conexion;    
    
    /*Ahora la Consulta*/
    $consulta = "INSERT INTO tbl_vehiculo (patente, anno, kilometraje, id_modelo, id_estado) VALUES ('$this->patente', '$this->anno',"
    ."'$this->km','$this->idm',0)";
    
    $this->conexion->query($consulta);
    $finsertadas = $this->conexion->affected_rows;
        if($finsertadas > 0){
            return true;
        }else{
            return false;
        }   
    }
    
    public function insertar_pv($rut, $patente){
            
        $this->rut = $rut;
        $this->patente = $patente;
        
        /*Ahora la Consulta*/
        $consulta = "INSERT INTO tbl_persona_vehiculo (rut,patente) VALUES ('$this->rut','$this->patente')";
        
        $this->conexion->query($consulta);
        $finsertadas = $this->conexion->affected_rows;
        if($finsertadas > 0){
            return true;
        }else{
            return false;
        }  
        
    }
    
}