<?php
include_once('db.php');

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$telefono = $_POST['telefono'];

echo "Los datos son los siguientes: <br>";
echo "$nombre, $fecha, $hora, $telefono";



$conectar = conn();
$sql = "INSERT INTO citas (Nombre, Fecha, Hora, Telefono) VALUES ('$nombre', '$fecha', '$hora', '$telefono')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- ERROR: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>