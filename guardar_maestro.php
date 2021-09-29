<?php
include("db.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$descripcion = $_POST["descripcion"];

$consulta = " INSERT INTO maestro(nombre,apellido,email,telefono,descripcion) VALUES ('".$nombre."','".$apellido."','".$email."','".$telefono."','".$descripcion."')";

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