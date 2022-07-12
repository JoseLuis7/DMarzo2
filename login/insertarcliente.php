<?php
include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$distrito=$_POST['distrito'];
$celular=$_POST['celular'];
$dni=$_POST['dni'];



$sql="INSERT INTO cliente VALUES('$nombre','$apellido','$distrito','$celular','$dni')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: admin2.php");
    
}else {
}
?>