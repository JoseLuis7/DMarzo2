<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];


$sql="UPDATE producto SET nombre='$nombre', precio='$precio',stock='$stock' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin1.php");
    }
?>