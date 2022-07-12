function calcular(a){
    a=parseInt(a);
    if(a<10&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
    }
    else if(a>=10){
        document.getElementById("resultado").innerHTML=(a*10);
        alert("¡Felicidades, haz recibido un bono para compras de 30 soles")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}