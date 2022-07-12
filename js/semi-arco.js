function calcular(a){
    a=parseInt(a);
    if(a<7&&a>=1){
        document.getElementById("resultado").innerHTML=a*20;
    }
    else if(a>=7){
        document.getElementById("resultado").innerHTML=(a*20);
        alert("¡Felicidades, haz recibido 2 kits de regalo")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}