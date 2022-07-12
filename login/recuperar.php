<?php
require 'conexion.php';

error_reporting(0);


$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];
$id_cargo=$_POST['id_cargo'];

if ($_POST) {
    $ID=$_POST['ID']; 
    $Nombre=$_POST['Nombre'];

    $sql="SELECT ID, Nombre, Usuario, Contraseña, id_cargo FROM usuarios WHERE ID='$ID' AND Nombre='$Nombre'";
    $resultado=mysqli_query($mysqli,$sql);


    $rst=$resultado->num_rows;
    
    if($rst>0){

        $row=$resultado->fetch_assoc();
        $sql="UPDATE usuarios SET ID='$ID',Nombre='$Nombre',Usuario='$Usuario', Contraseña='$Contraseña', id_cargo='$id_cargo' WHERE ID='$ID'";
        $query=mysqli_query($mysqli,$sql);

        if($query){
        echo "<h2>Sus datos fueron restablecidos con exito</h2>";
        }
    }else{
     echo "<h2>El id o nombre no existe</h2>";
    }
} 
      
?>     
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">   <!-- para que se viasualice en cada uno de los dispositivos-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PIÑATERIA&reg;D'MARZO</title>
    <link rel="stylesheet" href="./csslogin/estiloslogin.css">
</head>
<body background="img/fondo3.jpg">
<body>
    <form method="POST" action="#">
        <h1 class="animate__animated animate__backInLeft">Recupere su cuenta</h1>
        <p class="blanco">Ingrese su ID<input type="text" placeholder="ingrese su id" name="ID"></p>
        <br><p class="blanco">Ingrese el nombre registrado<input type="text" placeholder="ingrese su nombre" name="Nombre"></p>
        <br><p class="blanco">Ingrese el nuevo usuario<input type="text" placeholder="ingrese su usuario" name="Usuario"></p>
        <br><p class="blanco">Ingrese la nueva contraseña<input type="text" placeholder="ingrese la contraseña" name="Contraseña"></p>
        <br><p class="blanco">Ingrese su id de cargo<input type="text" placeholder="ingrese su id de cargo" name="id_cargo"></p>
        <input class="btn btn-primary btn-block" type="submit" value="Restablecer">
        <br><br><h2><a href="../login/login.php">Regresar</a></h2>
    </form>
</body>
</html>