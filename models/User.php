<?php

require_once 'Conexion.php';


class User extends Conexion{

private $id_usuario;    
private $nombre;
private $password;
private $email;
private $verificado;


public function __construct($nombre,$password,$email,$verificado){

    $this->nombre = $nombre;
    $this->password = $password;
    $this->email = $email;
    $this->verificado = $verificado;

}

public function getID(){
    return $this->id_usuario;

}
public function setID($id_usuario){
    $this->id_usuario = $id_usuario;
}


public function crearUsuario(){

$this->conexion->query('INSERT INTO prueba (nombre,password,email,verificado) VALUES ($this->nombre.$this->password,$this->email,$this->verificado');


}

}