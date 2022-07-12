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
      <link rel="stylesheet" href="./css_atm/inicio.css">
      <link rel="stylesheet" href="css_yensu/animate.min.css">
      <link rel="stylesheet" href="css_yensu/animate.css">
      <script src="js_yensu/wow.min.js"></script>
      <script>
        new WOW().init();
      </script>
    <!-- AGREGAR ESTILOS -->
   
   
    <style>
        a{
            /*border: 2px solid blue;*/
            background-color:rgb(127, 29, 218);
            color:white;
            border-radius: 25px;
            padding: 10px 18px;
            text-decoration: none;
        }

        a:hover{
            background-color:hotpink;
            color:black;
            padding: 15px 25px;
            transition-duration: 500ms;
        }

        #searchform input {
                margin-right: -5em;
                    min-width: 250px;
                } 
                #searchform input {
                min-height:35px;
                }
    </style>
    
<!-- AGREGAR ICONOS EN LINEA -->
<script src="https://kit.fontawesome.com/b9fdd83aa0.js" crossorigin="anonymous"></script>
<!-- CHATBOT -->
<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(254053)</script> 
</head>

<!-- APLICAR FONDO -->
<body background="img/fondo3.jpg">
<header>       
  
              
<!-- LOGO -->  
<div class="fila"> <!--vista escritorio-vista tablet-vista movil -->  
    
    <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->
    <img class="animate__animated animate__heartBeat" src="img/logooo.jpeg">  
    </div>
   
        
<!-- BARRA DE BÚSQUEDA -->

  <br>
  <br> <br> <br> 
        <div  class="col-3 col-m-10 col-s-12" 
        
            
            <i div class="field" id="searchform">
            <input type="text" id="" placeholder="Escriba aquí..." />
            <button type="button" id="search">Buscar</button>
           
        </div>
    <!-- CARRITO DE COMPRAS -->  
    <div class="carrito">
        <div class="col-3 col-m-10 col-s-12" 
            
                 
        <p><a href="">
            <i class="fa-solid fa-cart-plus" style="font: size 45px;"></i>&nbsp;
            <c><u><i>CARRITO</i></u></c>
            </a></p> 
        
        </div>

</div>            
<!-- REDES SOCIALES -->
<div class="redes">
<div class="col-2 col-m-10 col-s-12" 
      
<i><b><p><h3>Visítanos:</h3></b></u>
     
 <p><a href="https://fb.me/PinateriaDMarzo">
     <i class="fa-brands fa-facebook" style="font-size:25px;"></i>&nbsp;
 </a></p>
                      
 <p><a href="https://www.instagram.com/">
     <i class="fab fa-instagram" style="font-size:25px;"></i>&nbsp;
 </a></p>
                      
 <p></p><a href="https://wa.me/message/K3Q67VULJN5QB1">
     <i class="fa-brands fa-whatsapp-square" style="font-size:25px;"></i> &nbsp;
 </a></p></i> 
       
</div> 
</div>   
</header> 


<div class="menu" align="right">

    <div class="col-2 col-m-10 col-s-7" 
    <nav align="right"><h4>
        <a href="INICIO.php">HOME</a></h4>
    </div></nav>  
    <div class="col-2 col-m-10 col-s-7" 
    <nav align="right"><h4>
        <a href="nosotros.html">NOSOTROS</a></h4>
    </div></nav>
    <div class="col-2 col-m-10 col-s-7" 
    <nav align="right"><h4>
        <a href="servicios.html">SERVICIOS</a> </h4>
    </div></nav>
    <div class="col-2 col-m-10 col-s-7" 
    <nav align="center"><h4>
        <a href="equipo.html">EQUIPO</a></h4> 
    </div></nav>
    <div class="col-2 col-m-10 col-s-7" 
    <nav align="center"><h4>
        <a href="contactanos.html">CONTÁCTANOS</a></h4>
        
    </div></nav>
    <div class="col-2 col-m-10 col-s-7" 
         <nav align="left"><h4>
        <a href="login/login.php">LOGIN</a></h4>
        
        </div></nav>
  
</div>
   
<div class="linea">
<hr align="right"  width="92%"  size="6%" color="BLACK" >  <!-- LINEA -->


            <div class="fila"  > <!--vista escritorio-vista tablet-vista movil -->
                
                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->   
                            <h2 align="center" class="animate__animated animate__heartBeat" ><b> KIT "HAPPY BIRTHDAY" </b></h2>
                            <img class="animate__animated animate__backInUp" src="img/HB1.jpeg" width="350" height="350"> 
                            <center>
                             <table border="0">
                                <form>
                                    <a href="kit-numero.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br> 
                </div>

                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->                  
                            <h2 align="center" class="animate__animated animate__heartBeat" ><b> KIT "FELIZ CUMPLEAÑOS" </b></h2>
                            <img class="animate__animated animate__backInUp" src="img/HB2.jpeg" width="350" height="350"> 
                            <center>
                            <table border="0">
                                <form>
                                    <a href="kit-borlasYglobos.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br> 
                </div>
                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->                  
                          <th><h2 align="center" class="animate__animated animate__heartBeat" ><b> GLOBO "HAPPY BIRTHDAY" </b></h2>
                            <img class="animate__animated animate__backInUp" src="img/HB3.jpeg" width="350" height="350"> 
                            <center>
                            <table border="0">
                                <form>
                                    <a href="HappyGlobo.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br>  
                </div>
            
                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->   
                <h2 align="center" class="wow bounceInRight"><b> TIPOS DE GLOBOS </b></h2>
                            <img class="wow animate__backInLeft" src="img/HB4.jpeg" width="350" height="350"> 
                            <center>
                            <table border="0">
                                <form>
                                    <a href="globos.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br>  
                </div>
                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->   
                     <h2 align="center" class="wow bounceInRight"><b> ARREGLOS-GLOBOS </b></h2>
                            <img class="wow animate__backInLeft" src="img/HB5.jpeg" width="350" height="350"> 
                            <center>
                            <table border="0">
                                <form>
                                    <a href="arreglos.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br>  
                </div>
                <div class="col-4 col-m-6 col-s-12 "> <!-- 04 columnas -->   
                    <h2 align="center" class="wow bounceInRight"><b> GLOBOS SEMI-ARCO </b></h2>
                            <img class="wow animate__backInLeft" src="img/HB6.jpeg" width="350" height="350"> 
                            <center>
                            <table border="0">
                                <form>
                                    <a href="semi-arco.php">
                                    <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br>  
                </div>
            
      

        <hr align="center"  width="100%"  size="13%" color="FD41B2" > <!-- LINEA -->

        <h1 class="wow animate__flipInX"><p align="center" style="background-color:pink"><i>¡PENSAMOS EN TU FELICIDAD!</i></p></h1>
        <h1 class="wow animate__flipInX" ><p align="center" style="background-color:pink"><i>Tenemos variedad en productos, kit's temáticos y mucho más.</i></p></h1>          
            

        <hr align="center"  width="100%"  size="13%" color="FD41B2" > <br><br><br> <!-- LINEA -->

<!-- TABLA DE KIT'S -->
       
            <div class="col-4 col-m-6 col-s-8 "> <!-- 04 columnas -->  
                        <h2 class="wow bounceInLeft" align="center"><b> KIT "BABY SHARK" </b></h2>
                        <img class="wow bounceInRight" src="img/1.jpg" width="350" height="350"> 
                        <center>
                        <table border="0">
                            <form>
                                <a href="BabyShark.php">
                                    <input type="button" value="Ver contenido">
                                </a>
                            </form>
                        </center></table><br>
            </div>
                <div class="col-4 col-m-6 col-s-8 "> <!-- 04 columnas -->  
                        <h2 class="wow bounceInLeft" align="center"><b> KIT "PAW PATROL" </b></h2>
                        <img class="wow bounceInRight" src="img/2.jpg" width="350" height="350"> 
                        <center>
                        <table border="0">
                            <form>
                                <a href="PawPatrol.php">
                                    <input type="button" value="Ver contenido">
                                </a>
                            </form>
                        </center></table><br>
                </div>   
                <div class="col-4 col-m-6 col-s-8"> <!-- 04 columnas -->  
                <h2 class="wow bounceInLeft" align="center"><b> KIT "DRAGON BALL" </b></h2>
                        <img class="wow bounceInRight" src="img/3.jpg" width="350" height="350">
                        <center>
                        <table border="0">
                            <form>
                                <a href="DragonBall.php">
                                    <input type="button" value="Ver contenido">
                                </a>
                            </form>
                        </center></table><br>
                      
                </div>

                <div class="col-4 col-m-6 col-s-8"> <!-- 04 columnas -->  
                    <h2 class="wow bounceInLeft" align="center"><b> KIT "MINI MOUSE" </b></h2>
                            <img class="wow bounceInRight" src="img/5.jpeg" width="350" height="350">
                            <center>
                            <table border="0">
                                <form>
                                    <a href="MinieMouse.php">
                                        <input type="button" value="Ver contenido">
                                    </a>
                                </form>
                            </center></table><br>
                          
                    </div>
                <div class="col-4 col-m-6 col-s-8 "> <!-- 04 columnas -->  
                        <h2 class="wow bounceInRight" align="center"><b> KIT "FROZEN" </b></h2>
                             <img class="wow bounceInLeft" SRC="img/4.jpg" width="350" height="350">
                             <center>
                                <table border="0">
                                    <form>
                                        <a href="Frozen.php">
                                            <input type="button" value="Ver contenido">
                                        </a>
                                    </form>
                                </center></table><br>
                </div>
                <div class="col-4 col-m-6 col-s-8 "> <!-- 04 columnas -->  
                    <h2 class="wow bounceInRight" align="center"><b> KIT "GALLINITA" </b></h2>
                             <img class="wow bounceInLeft" SRC="img/6.jpg" width="350" height="350">
                             <center>
                                <table border="0">
                                    <form>
                                        <a href="GallinitaPintadita.php">
                                            <input type="button" value="Ver contenido">
                                        </a>
                                    </form>
                                </center></table><br>                
                </div>
            </div><br><br>
              
 <!-- PIE DE PAGINA -->
    
    <div id="footer">
        <footer>           
                <table>       
                        <td><h3>D'MARZO&copy;</h3></td><br>
                        <td><u>Página desarrollado por el GRUPO 04</u> <br> Dirección: Jr. Andahuaylas Nro. 830 Int. LL-4, 01 / Lima, Perú <br> Correo: jhovanny.monago@iclaro.com.pe <br> Telefono: 918470771</td>       
                </table>
                
        </footer>
    </div>
</body>
</html>

