<?php
include_once ('db.php');

$nombres=$_POST['nombres'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$numero=$_POST['numero'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$comentario=$_POST['comentario'];


echo "Gracias por contactarnos <BR>";
echo " Los Datos son: <BR>";
//echo "$nombres, $correo, $direccion, $numero, $edad, $genero, $fecha, $hora, $comentario,$imagen";

$conectar=conn();
$sql="INSERT INTO registro (nombres, correo, direccion, numero, edad, genero, fecha, hora, comentario)
VALUES ('$nombres', '$correo', '$direccion', '$numero', '$edad', '$genero', '$fecha', '$hora', '$comentario')";
$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed ! SQL-error: " ($conectar),E_USER_ERROR );
echo   "$sql";
     
?>


