<div class="panel-body">
<?php
  $conn = new mysqli("localhost", "root", "", "pruebas");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
  echo 'Conectado a la base de datos.<br>';  
  $conn->close();
?>
</div>