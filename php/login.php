<?php

function login(){

$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['email'];
if($_POST['verificado'] == "on"){
    $verificado = true;
}else{
    $verificado = false;
}

$con = new Conexion('localhost','root','','Signup&in'); 

$query = $con->query('SELECT password,email,verificado FROM signup');

while($fila = $query->fetch_assoc()){


if($fila['email'] == $email && $fila['pass'] == $pass){

 echo header("location: xd.html");   

}else if($fila['email'] != $email || $fila['pass'] != $pass){

echo 'Email o contraseña incorrectos';

}



}


}