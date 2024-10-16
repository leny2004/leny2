<?php
include('conexion.php');

// Recibe los datos del formulario de registro
$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];

// Inserta los datos en la tabla de usuarios
$sql = "INSERT INTO tarjeta (nombre, imagen) VALUES ('$nombre','$imagen')";
if ($conexion->query($sql) === TRUE) {
    ?>
  <script>window.location.replace("http://localhost/leny_MT/ejercicio_2/");</script>
  <?php
} else {
echo "Error al registrar: " . $conexion->error;
}

?>