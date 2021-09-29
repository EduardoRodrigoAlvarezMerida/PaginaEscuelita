<?php
include("db.php");


$nombre = $_POST["name"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

//echo  " Nombre: ".$nombre." Email: ".$email." fecha: ".$fecha."mensaje".$mensaje;
// header("Location: index.html ")

$consulta = " INSERT INTO contacto(nombre,correo,telefono,mensaje) VALUES ('".$nombre."','".$correo."','".$telefono."','".$mensaje."')";
if($conexion->query($consulta) === TRUE)
{
echo "Dato Ingresado con exito";
header("Location: index.php");
}
else
{
 echo "Error: ".$consulta."<br>".$conexion->error;
}

$conexion ->close();



?>