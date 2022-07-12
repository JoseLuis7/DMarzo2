<?php
include("conexionjl.php");
$con=conectar();

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];



$sql="INSERT INTO producto VALUES('$nombre','$precio','$stock')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: admin1.php");
    
}else {
}
?>