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
      <link rel="stylesheet" href="./css_atm/semiarco.css">
      <!-- Agregar js: externa -->
      <?php
      if ($id_cargo==2) {
      ?>  
      <script src="./js/semi-arco.js"></script> 
      <?php
      }else{
      ?>
      <script src="./js/semi-arco1.js"></script>
      <?php
      }
      ?>  
    <!-- AGREGAR ESTILOS -->
    <style>
        a{
            /*border: 2px solid blue;*/
            background-color: mediumslateblue;
            color:white;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        a:hover{
            background-color:hotpink;
            color:indigo;
            padding: 15px 25px;
            transition-duration: 1000ms;
        }

        c{
            /*border: 2px solid blue;*/
            background-color:black;
            color:white;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        c:hover{
            background-color:white;
            color:indigo;
            padding: 10px 20px;
            transition-duration: 1000ms;
        }

        #searchform input {
                margin-right: -5em;
                    min-width: 300px;
                } 
                #searchform input {
                min-height:25px;
                }
    </style>

    <!-- AGREGAR ICONOS EN LINEA -->
    <script src="https://kit.fontawesome.com/b9fdd83aa0.js" crossorigin="anonymous"></script>


    <div class="fila"> <!--vista escritorio-vista tablet-vista movil -->
  
        <div class="col-2 col-m-10 col-s-12" 
        <nav align="center"><h3>
            <a href="INICIO.php">HOME</a></h3>
        </div>  
        <div class="col-2 col-m-10 col-s-12" 
        <nav align="center"><h3>
            <a href="nosotros.html">NOSOTROS</a></h3>
        </div>
        <div class="col-2 col-m-10 col-s-12" 
        <nav align="center"><h3>
            <a href="servicios.html">SERVICIOS</a> </h3>
        </div>
        <div class="col-2 col-m-10 col-s-12" 
        <nav align="center"><h3>
            <a href="equipo.html">EQUIPO</a></h3> 
        </div>
        <div class="col-2 col-m-10 col-s-12" 
        <nav align="center"><h3>
            <a href="contactanos.html">CONTÁCTANOS</a></h3>
        </div>
        
        </div>
        </div>
        </nav>
        </div>  
        </div>
        <hr align="center"  width="80%"  size="6%" color="BLACK" > <!-- LINEA -->


    <h1><p align="center" style="background-color:lightsalmon">GLOBOS "SEMI-ARCOS CON COLA DE SIRENA"</p></h1>
    <!-- POSICION DEL ICONO + -->
    <style>
        table,th,td {
            padding: 40px 10px;
            border-collapse: collapse;
        }
    </style>

<!-- JS MENSAJE Y CALCULO DE PRECIO -->
<?php
if ($id_cargo==2) {
?> 
<center>
    <h2><font style="color:rgb(209, 68, 68)"><b>Por comprar más de 6 elementos de este Kit: ¡LLÉVATE 2 GRATIS!</b></font></h2>
    <i><h4>(Promoción válido hasta agotar stock)</h4></i>
    </center>
    <h2 align="center" > Usuario: <?php echo $Nombre; ?></h2>
    <h3 align="center"><nav><a href="cerrar1.php">Salir</a></nav></h3>
<?php
}
?>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for=""><font color="black"><b>Cantidad de productos: </b></font></label>
    <input type="number" name="" id="num">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" onclick="calcular(
    document.getElementById('num').value);">Calcular el precio</button><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <font color="black"><b>El precio a pagar por los productos es de: S/. <span id="resultado"></span></b></font><br><br><br>

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
    <!-- CHATBOT -->
<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(254053)</script> 
</head>
<body bgcolor="#FEE9C5">
    
    <div class="fila"> <!--vista escritorio-vista tablet-vista movil -->
           
        <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas --> 
            <img src="img2/cola7.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>     
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->    
            <img src="img2/cola8.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>   
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->         
            <img src="img2/cola9.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>    
  
            <div class="col-4 col-m-5 col-s-9"> <!-- 04 columnas -->     
            <img src="img2/cola1.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>  
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->     
            <img src="img2/cola5.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>   
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->           
            <img src="img2/cola6.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>       

            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas --> 
            <img src="img2/cola1.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>     
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->    
            <img src="img2/cola2.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>   
            <div class="col-4 col-m-5 col-s-9 "> <!-- 04 columnas -->         
            <img src="img2/cola3.jpg" alt="">
            <i style="font-size: 35px; position: relative;right: -242px; bottom: 283px;" type="button" onclick="presione();"class="fa-solid fa-circle-plus"></i><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/. 20.00</h2>
            </div>         
    </div>
        
            <br><br><br>



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