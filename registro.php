<?php
$conectar=mysqli_connect("localhost","root","","registro");
$nombre= $_POST['nombre'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$tarjeta= $_POST['tarjeta'];

mysqli_query($conectar, "INSERT INTO  clientes    VALUES ('','$nombre','$telefono','$direccion','$tarjeta')");
echo("solictud enviada")



?>