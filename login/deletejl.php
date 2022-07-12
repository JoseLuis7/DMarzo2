<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM producto  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin1.php");
    }
?>
