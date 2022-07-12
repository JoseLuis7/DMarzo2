function calcular(a){
    a=parseInt(a);
    if(a<7&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
    }
    else if(a>=7){
        document.getElementById("resultado").innerHTML=(a*10)
        alert("¡Felicidades, elige un producto adicional del kit baby shark y llévatelo totalmente gratis!")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}