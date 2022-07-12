function calcular(a){
    a=parseInt(a);
    if(a>=1){
        document.getElementById("resultado").innerHTML=a*25;
        alert("Puedes iniciar sesion como usuario para obtener beneficios")
    }else{
        alert("Ingrese una cantidad correcta por favor")
    }
 }