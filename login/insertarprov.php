<?php
include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];


$sql="INSERT INTO proveedores VALUES('$nombre','$direccion','$celular','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: admin3.php");
    
}else {
}
?>