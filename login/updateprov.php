<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];



$sql="UPDATE proveedores SET nombre='$nombre', direccion='$direccion',celular='$celular' ,correo='$correo'WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin3.php");
    }
?>