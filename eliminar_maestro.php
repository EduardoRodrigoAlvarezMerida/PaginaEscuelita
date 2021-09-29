<?php
include("db.php");
if (isset($_GET["id"]))
{
    $id = $_GET["id"];

    $consulta= "DELETE  FROM maestro Where id='".$id."'";

  if($conexion->query($consulta) === TRUE)
  {
header("Location: index.php");
}
else
{
 echo "Error: ".$consulta."<br>".$conexion->error;
}

$conexion ->close();


}
?>