<?php

function conn(){
    $hostname = "localhost";
    $usuariodb="root";
    $passwordbd="";
    $dbname="dmarzo1";

    $conectar = mysqli_connect($hostname, $usuariodb, $passwordbd, $dbname);
    return $conectar;
}


?>