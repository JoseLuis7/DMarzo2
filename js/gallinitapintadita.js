function calcular(a){
    a=parseInt(a);
    if(a<7&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
    }
    else if(a>=7){
        document.getElementById("resultado").innerHTML=a*10
        alert("¡Felicidades, haz ganado un envío gratis por tu compra!")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}