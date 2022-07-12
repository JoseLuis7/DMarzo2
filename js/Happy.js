            var cadena , cod ;
            var tener = RegExp("(TIENE|TIENES|TENGO|TENES)");
            var edad =/ AÑOS /;
            var haber = RegExp("(HAY|HABRA)");
            var piñata =/ PIÑATA /;
    
            function evaluarEdad(){
                cadena = document.getElementById("txtPregunta").value;
                cadena = cadena.toUpperCase();

                document.getElementById("resultado1").innerHTML=tener.test(cadena);
                document.getElementById("resultado2").innerHTML=edad.test(cadena);

                if (tener.test(cadena)==true && edad.test(cadena)==true){
                    cod= 3
                    alert(cod);
                }
            }
            function evaluarPiñata(){
                cadena = document.getElementById("txtPregunta").value;
                cadena = cadena.toUpperCase();

                document.getElementById("resultado1").innerHTML=haber.test(cadena);
                document.getElementById("resultado2").innerHTML=piñata.test(cadena);

                if (haber.test(cadena)==true && piñata.test(cadena)==true){
                    cod= 4
                    alert(cod);
                }

            }
        

