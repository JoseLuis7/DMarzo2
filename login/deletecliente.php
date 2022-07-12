<?php

include("conexionjl.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM cliente  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin2.php");
    }
?>
