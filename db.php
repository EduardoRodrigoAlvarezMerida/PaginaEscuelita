<?php
$servername = "mysql-52151-0.cloudclusters.net";
$usuario = "admin";
$password = "administrador";
$nombredb = "practica";
$puerto = "17253";

//creando la conexion
$conexion = new mysqLi($servername,$usuario,$password,$nombredb,$puerto);

//comprobar la coneccion
if($conexion -> connect_error)
{
    die("Conexio Fallida: " .$conexion->connect_error);
}