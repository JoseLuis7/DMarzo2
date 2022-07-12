function calcular(a){
    a=parseInt(a);
    if(a<5&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
    }
    
    else if(a>=5){
        document.getElementById("resultado").innerHTML=(a*10)
        alert("¡Felicidades, elige 2 productos adicionales del kit dragon ball y llévatelo totalmente gratis!")
    }
    else{
        alert("Ingrese una cantidad correcta por favor")
    }
}