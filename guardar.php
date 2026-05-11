<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO pedidos(nombre,email,telefono,producto,cantidad)
VALUES('$nombre','$email','$telefono','$producto','$cantidad')";

if($conexion->query($sql) === TRUE){
    echo "
    <h1>Pedido guardado correctamente</h1>
    <a href='index.php'>Volver al inicio</a>
    ";
}else{
    echo "Error: " . $conexion->error;
}
?>