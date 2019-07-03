<?php

require_once '../models/User.php';


function login(){


$password = $_POST['password'];
$email = $_POST['email'];


$con = new Conexion('localhost','root','','prueba'); 

$query = $con->query('SELECT password,email FROM signin');

while($fila = $query->fetch_assoc()){


if($fila['email'] == $email && $fila['pass'] == $pass){

 echo header("location: next.html");   

}else if($fila['email'] != $email || $fila['pass'] != $pass){

echo 'Email o contraseña incorrectos';

}
}

}

function singin(){

    $hay_usuario = false;
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if($_POST['verificado'] == "on"){
        $verificado = true;
    }else{
        $verificado = false;
    }
    $user = new User($nombre,$password,$email,$verificado);
    
    $c = $con->Query('SELECT nombre,password,email,verificado FROM prueba');
    
    while($fila = $c->fetch_assoc()){
    
    if($fila['email'] == $email){
        echo 'El usuario ya existe';
        $hayUsuario = true;
    }
    
    
    }
    if(!$hayUsuario){
        
        
        $user->crearUsuario();
    
    }


}