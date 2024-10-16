<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <title>Document</title>
</head>
<body>
  <main>
    <form action="registroTar.php" method="post">
      <input type="text" placeholder="Nombre" name="nombre" id="nombre">
      <input type="text" placeholder="imagen" name="imagen" id="imagen">
      <button type="submit">enviar</button>
    </form>
    
    <?php
    include('mostrarTar.php');
   
    // Procesar los resultados
      while ($fila = $resultado->fetch_assoc()) {
    ?>
        <div class="card">
          <img src="<?php echo $fila['Imagen']; ?>" alt="">
          <div class="card-content">
            <h2>
              <?php echo $fila['Nombre']; ?>
            </h2>
          </div>
        </div>
    <?php
      }
    
    ?>

  </main>
</body>
</html>