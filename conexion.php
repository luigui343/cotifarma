<?php 


$conexion = new mysqli("#","#","#","Cotifarma");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$contreaseña = $_POST['password'];


$query = "INSERT INTO T_CLIENTE (nombre,telefono,correo,direccion,pass) ('$nombre','$telefono','$correo','$direccion','password')";

if($query){

	echo "Se ha registrado con exito";
}else{


	echo " ha ocurrido un error pruebe mas tarde";

}


 ?>