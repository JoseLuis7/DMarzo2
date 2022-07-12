function calcular(){
    var a=parseInt(document.getElementById("precio").value);
    var b=parseInt(document.getElementById("num").value);
    document.getElementById("resultado").innerHTML=a*b;

    if(b<7&&b>=1){
        if(a!=12&&a!=15&&a!=18&&a!=25&&a!=30&&a!=35){
            alert("Solo puedes ingresar los precios que se observan en la pagina")
            document.getElementById("resultado").innerHTML=null;
        }
        else{
            document.getElementById("resultado").innerHTML=a*b;
        }
    }
    else if(b>=7){
        if(a!=12&&a!=15&&a!=18&&a!=25&&a!=30&&a!=35){
            alert("Solo puedes ingresar los precios que se observan en la pagina")
            document.getElementById("resultado").innerHTML=null;
        }
        else{
            alert("¡Felicidades, haz recibido 2 kits de regalo!")
            document.getElementById("resultado").innerHTML=a*b;
        }
    }
    else{
        alert("Ingresa un valor correcto");
    }
}