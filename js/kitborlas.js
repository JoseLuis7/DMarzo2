function calcular(a){
    a=parseInt(a);
    if(a<11&&a>=1){
        document.getElementById("resultado").innerHTML=a*23;
        alert("No cumples con los requisitos para obtener un descuento, lo sentimos")
    }
    else if(a>=11){
        document.getElementById("resultado").innerHTML=(a*23)-(a*23*30/100)
        alert("¡Felicidades, se ha reaizado un descuento del 30%")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}