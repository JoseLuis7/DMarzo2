<?php
require 'conexion.php';
session_start();


if ($_POST) {
    $Usuario=$_POST['Usuario'];
    $Contraseña=$_POST['Contraseña'];


    
    $sql="SELECT ID, Nombre, Usuario, Contraseña, id_cargo FROM usuarios WHERE Usuario='$Usuario'";
    $resultado=mysqli_query($mysqli,$sql);


    $num=$resultado->num_rows;
    

    if($num>0){

        $row=$resultado->fetch_assoc();
        $Contraseña_bd=$row['Contraseña'];
        $contraseña_c=$Contraseña;
        
        if($Contraseña_bd==$contraseña_c){
            //inicio de sesion
            $_SESSION['ID']=$row['ID'];
            $_SESSION['Nombre']=$row['Nombre'];
            $_SESSION['id_cargo']=$row['id_cargo'];

            //ir a pagina principal
            switch ($row['id_cargo']) {
                case 1:
                    header("Location:admin1.php");
                    break;
                
                case 2:
                    header("Location:../INICIO.php");
                    break;
                default:    
            }
        }else{
            echo "<h2>La contraseña es incorrecta</h2>";
        }
    }else{
        echo "<h2>No existe ese usuario</h2>";
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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h1 class="animate__animated animate__backInLeft">SISTEMA DE LOGIN</h1>
        <p class="blanco">Usuario <input type="text" placeholder="ingrese su usuario" name="Usuario"></p>
        <p class="blanco">Contraseña <input type="password" placeholder="ingrese su contraseña" name="Contraseña"></p>
        <input class="btn btn-success" type="submit" value="Ingresar"><br><br>
        <button><h3><a href="recuperar.php">OLVIDE MI CUENTA</a></h3></button><br><br>
        <button><h3><a href="../INICIO.php">REGRESAR</a></h3></button>
    </form>
</body>
</html>
  
    