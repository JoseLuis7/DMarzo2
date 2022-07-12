<?php
session_start();
error_reporting(0);
$Nombre=$_SESSION['Nombre'];
$id_cargo=$_SESSION['id_cargo'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">   <!-- para que se viasualice en cada uno de los dispositivos-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>PIÑATERIA&reg;D'MARZO</title>
     <!-- Agregar CSS -->
     <link rel="stylesheet" href="./css_jl/main.css">
     <link rel="stylesheet" href="css_yensu/animate.min.css">
    <link rel="stylesheet" href="css_yensu/animate.css">
    <script src="js_yensu/wow.min.js"></script>
      <script>
        new WOW().init();
      </script>
     <!-- Agregar js: externa -->
     <?php
      if ($id_cargo==2) {
      ?>  
      <script src="./js/dragonball.js"></script> 
      <?php
      }else{
      ?>
      <script src="./js/dragonball1.js"></script>
    <?php
    }
    ?>    


    <!-- AGREGAR ICONOS EN LINEA -->
    <script src="https://kit.fontawesome.com/b9fdd83aa0.js" crossorigin="anonymous"></script>
    <!-- CHATBOT -->
<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(254053)</script> 
</head>

<div class="fila"> <!--vista escritorio-vista tablet-vista movil -->
  
    <div class="col-2 col-m-10 col-s-12" 
    <nav align="center"><h3>
        <a href="INICIO.php">HOME</a></h3>
    </div></nav>  
    <div class="col-2 col-m-10 col-s-12" 
    <nav align="center"><h3>
        <a href="nosotros.html">NOSOTROS</a></h3>
    </div></nav>
    <div class="col-2 col-m-10 col-s-12" 
    <nav align="center"><h3>
        <a href="servicios.html">SERVICIOS</a> </h3>
    </div></nav>
    <div class="col-2 col-m-10 col-s-12" 
    <nav align="center"><h3>
        <a href="equipo.html">EQUIPO</a></h3> 
    </div></nav>
    <div class="col-2 col-m-10 col-s-12" 
    <nav align="center"><h3>
        <a href="contactanos.html">CONTÁCTANOS</a></h3>
    </div></nav>
    
    </div>
    </div>
    </nav>
    </div>  
    </div>
    <hr align="center"  width="80%"  size="6%" color="BLACK" >  <!-- LINEA -->
    

    <script src="https://kit.fontawesome.com/493971e1cb.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        </script>
        
</head>
<body bgcolor="#76FFE6" text="#000000">
    <header>
        <h1 class="animate__animated animate__flip"><p align="center" style="background-color:cornflowerblue"><b>KIT "DRAGON BALL"</b></p></h1>
      
    </header>

    <!-- BARRA DE BÚSQUEDA -->
    <table align="center">
    <td>           
        <div class="field" id="searchform">
        <input type="text" id="searchterm" placeholder="Escriba aquí el producto que desea..." />
        <button type="button" id="search">Buscar</button>
        </div>                  
    </td>
    </table>

<!-- JS MENSAJE Y CALCULO DE PRECIO -->
<?php
if ($id_cargo==2) {
?>    
    <center>
        <h2><font style="color:darkblue"><b>Por comprar más de 4 kit's: Obtén 2 más GRATIS</b></font></h2>
        <i><h4>(Promoción válido hasta agotar stock)</h4></i>
        </center>
        <h2 align="center" > Usuario: <?php echo $Nombre; ?></h2>
        <h3 align="center"><nav><a href="cerrar1.php">Salir</a></nav></h3>
<?php
}
?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for=""><font color="darkblue"><b>Cantidad de productos: </b></font></label>
        <input type="number" name="" id="num">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="calcular(
        document.getElementById('num').value);">Calcular el precio</button><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font color="darkblue"><b>El precio a pagar por los productos es de: S/. <span id="resultado"></span></b></font><br><br><br>

<!-- VENTANA EMERGENTE -->
    <script type="text/javascript">
        function presione(){
            x=confirm("¿Deseas agregar este producto?");//cuadro de diálogo
            //estructura condicional doble
            if (x) {
                //instrucción v
                alert("Producto agregado"); 
            }else{
                //instrucción f
                alert("Siga revisando nuestros productos");
            }
        }
    </script>
    <!-- Agregar contenedores -->
    <div class="fila"> <!--vista escritorio-vista tablet-vista movil -->
                    
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->
            <img class="wow animate__fadeInTopLeft"src="IMG Dragon Ball/Captura 1.jpeg" width="300">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->     
            <img class="wow animate__bounceInUp"src="IMG Dragon Ball/Captura 2.jpeg" width="300">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div>     
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->               
                <img class="wow animate__fadeInTopRight"src="IMG Dragon Ball/Captura 3.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
  
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                    
                <img class="wow animate__fadeInTopLeft"src="IMG Dragon Ball/Captura 4.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                    
                <img class="wow animate__bounceInUp" src="IMG Dragon Ball/Captura 5.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div>    
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                        
                <img class="wow animate__fadeInTopRight"src="IMG Dragon Ball/Captura 6.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div>   
    
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                        
                <img class="wow animate__fadeInTopLeft"src="IMG Dragon Ball/Captura 7.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                        
                <img class="wow animate__bounceInUp"src="IMG Dragon Ball/Captura 8.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                       
                <img class="wow animate__fadeInTopRight"src="IMG Dragon Ball/Captura 9.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
         
                <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                       
                <img class="wow animate__fadeInTopLeft"src="IMG Dragon Ball/Captura 10.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div>  
                <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                                        
                <img class="wow animate__bounceInUp"src="IMG Dragon Ball/Captura 11.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
                <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->                                        
                <img class="wow animate__fadeInTopRight"src="IMG Dragon Ball/Captura 12.jpeg" width="300">
                <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 10.00</h2>
            </div> 
    </div><br><br>

            
    
    <!-- PIE DE PAGINA -->
<div id="footer">
    <footer>           
        <table>       
            <td><h3>D'MARZO&copy;</h3></td><br>
            <td><u>Página desarrollado por el GRUPO 04</u> <br> Dirección: Jr. Andahuaylas Nro. 830 Int. LL-4, 01 / Lima, Perú <br> Correo: jhovanny.monago@iclaro.com.pe <br> Telefono: 918470771</td>       
         
            <td>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>       
            </td>

            <td align="margin-right">
                <p><h3>Visítanos en:</h3></p>
                    
                <p><a href="https://fb.me/PinateriaDMarzo">
                    <i class="fa-brands fa-facebook" style="font-size:25px;"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                <a href="https://www.instagram.com/">
                    <i class="fab fa-instagram" style="font-size:25px;"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                <a href="https://wa.me/message/K3Q67VULJN5QB1">
                    <i class="fa-brands fa-whatsapp-square" style="font-size:25px;"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>           
            </td>
        
        </table>
    </footer>
</div>

</body>
</html>