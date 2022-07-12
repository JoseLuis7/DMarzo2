function calcular(a){
    a=parseInt(a);
    if(a<5&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
        alert("No cumples con los requisitos para obtener un descuento, lo sentimos")
    }
    else if(a>=5){
        document.getElementById("resultado").innerHTML=(a*10)-(a*10*15/100)
        alert("¡Felicidades, se ha realizado un descuento del 5%")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}