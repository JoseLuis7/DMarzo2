function calcular(a){
    a=parseInt(a);
    if(a<6&&a>=1){
        document.getElementById("resultado").innerHTML=a*25;
        alert("No cumples con los requisitos para obtener un descuento, lo sentimos")
    }
    else if(a>=6&&a<=10){
        document.getElementById("resultado").innerHTML=(a*25)-(a*25*20/100)
        alert("¡Felicidades, se ha realizado un descuento del 20%")
    }
    else if(a>=11){
        document.getElementById("resultado").innerHTML=(a*25)-(a*25*40/100)
        alert("¡Felicidades, se ha realizado un descuento del 40%")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}