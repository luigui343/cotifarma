<?php 

//VERIFICA BASE DE DATOS


$conexion = new mysqli("#","#","#","Cotifarma");

// VARIABLES A INGRESAR 

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['password'];

//ENVIAR LA CONSULTA 


$query = "INSERT INTO T_CLIENTE (nombre,telefono,correo,direccion,pass) ('$nombre','$telefono','$correo','$direccion','password')";

//IMPRIME UN ERROR O CONECCION

if($query){

	echo "Se ha registrado con exito";
}else{


	echo " ha ocurrido un error intente mas tarde";

}


 ?>