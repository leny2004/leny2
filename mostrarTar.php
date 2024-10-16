<?php
include('conexion.php');
    $sql = "SELECT * FROM tarjeta";
    $resultado = $conexion->query($sql);

    // Procesar los resultados
    if ($resultado->num_rows > 0) {
      // Salida de los datos de cada fila
      //Leer desde html
    } else {
      echo "Error al registrar: " . $conexion->error;
    }

    ?>