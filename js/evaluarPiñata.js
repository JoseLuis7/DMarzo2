function evaluarPiñata() {
    cadena = document.getElementById("txtPregunta").value;
    cadena = cadena.toUpperCase();

    document.getElementById("resultado3").innerHTML = haber.test(cadena);
    document.getElementById("resultado4").innerHTML = piñata.test(cadena);

    if (haber.test(cadena) == true && piñata.test(cadena) == true) {
        cod = 5;
        alert(cod);
    }
}
