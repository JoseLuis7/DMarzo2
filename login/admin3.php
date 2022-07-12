
<?php 
    include("conexionjl.php");
    $con=conectar();

    $sql="SELECT *  FROM proveedores";
    $query=mysqli_query($con,$sql);
?>
<?php


session_start();
$Nombre=$_SESSION['Nombre'];

if(!isset($_SESSION['ID'])){
    header("Location: login.php");
}

if(!isset($_SESSION['id_cargo'])){
    header('location: login.php');
}else{
    if($_SESSION['id_cargo'] != 1){
        header('location: login.php');
    }
}


error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIÑATERIA&reg;D'MARZO</title>
    <link rel="stylesheet" href="./css/admin.css">
    <script src="https://kit.fontawesome.com/f227c8625f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<header class="header">
    <div class="div-header">
        <div class="div-menu">
            <nav class="nav-menu">
                <a href="admin1.php" class="links">PRODUCTOS</a>
                <a href="admin2.php" class="links">CLIENTES</a>
                <a href="admin3.php" class="links">PROVEEDORES</a>
                <a href="" class="login"><i class="fa-solid fa-user-gear"></i>&nbsp;&nbsp;<?php echo $Nombre; ?></a>
                <br><button><a href="cerrar.php">Salir</a></button> 
            </nav>
        </div>    
    </div>
</header>
<body>    
    <div class="subtitulo1">
        <br><br><br><br>
        <h2 class="letra1"><i class="fa-solid fa-people-group"></i>&nbsp; Registro de Proveedores</h2>
        </div>

<div class="container mt-5">
        <div class="row"> 
            
            <div class="col-md-3">
                <h1>Ingrese Proveedor</h1>
                    <form action="insertarprov.php" method="POST">

                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                        <input type="text" class="form-control mb-3" name="celular" placeholder="Celular">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                   
                        <input type="submit" class="btn btn-primary" VALUE="INSERTAR">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Nombre </th>
                            <th>Dirección</th>
                            <th>Celular</th>                                    
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['nombre']?></th>
                                    <th><?php  echo $row['direccion']?></th>
                                    <th><?php  echo $row['celular']?></th>
                                    <th><?php  echo $row['correo']?></th>
                              
                                    <th><a href="actualizarprov.php?id=<?php echo $row['nombre'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="deleteprov.php?id=<?php echo $row['nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>  
</div>

</body>
</html>