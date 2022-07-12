<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$distrito=$_POST['distrito'];
$celular=$_POST['celular'];
$dni=$_POST['dni'];



$sql="UPDATE cliente SET nombre='$nombre', apellido='$apellido',distrito='$distrito' ,celular='$celular',dni='$dni'WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin2.php");
    }
?>