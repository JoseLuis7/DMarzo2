<?php
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];
$numero = $_GET['numero'];

echo "<h2> INFORMACION RECIBIDA DESDE PHP</h2>";
echo "EL NOMBRE RECIBIDO ES: " . $nombre . "<br/>";
echo "EL EMAIL RECIBIDO ES: " . $email . "<br/>";
echo "LA DIRECCION RECIBIDO ES: " . $direccion . "<br/>";
echo "EL NUMERO RECIBIDO ES: " . $numero . "<br/>";

?>