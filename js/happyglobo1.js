function calcular(a){
    a=parseInt(a);
    if(a<10&&a>=1){
        document.getElementById("resultado").innerHTML=a*10;
    }else{
        alert("Ingrese una cantidad correcta por favor")
    }
}