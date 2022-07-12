<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM proveedores  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin3.php");
    }
?>
