function calcular(a){
    a=parseInt(a);
    if(a<5&&a>=1){
        document.getElementById("resultado").innerHTML=a*30;
        alert("No cumples con los requisitos para obtener un descuento, lo sentimos")
    }
    else if(a>=5){
        document.getElementById("resultado").innerHTML=(a*30)-(a*30*20/100);
        alert("¡Felicidades, obtuviste un descuento del 20% por tu compra!")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}