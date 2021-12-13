$(document).ready(function() {
    loadTest();
    $("#frmtest").bind("submit", function() {
        // Capturamnos el boton de envío
        var btnEnviar = $("#btnNext");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                /*
                 * Esta función se ejecuta durante el envió de la petición al
                 * servidor.
                 * */
                // btnEnviar.text("Enviando"); Para button 
                btnEnviar.val("Guardando ..."); // Para input de tipo button
                btnEnviar.attr("disabled", "disabled");
            },
            complete: function(data) {

                /*
                 * Se ejecuta al termino de la petición
                 * */
                btnEnviar.val("Siguiente");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data) {
                var resultados = data;
                if (resultados.status == 'success') {
                    loadTest();

                } else {
                    Swal.fire("No se pudo guardar");
                }



            },
            error: function(data) {
                /*
                 * Se ejecuta si la peticón ha sido erronea
                 * */
                alert("Problemas al tratar de enviar el formulario");
            }
        });
        // Nos permite cancelar el envio del formulario
        return false;
    });
});

function loadTest() {
    const pregunta1 = document.querySelector('#p1');
    const pregunta2 = document.querySelector('#p2');
    const progress = document.getElementById('progress-bar');
    $("#answer-item-11").prop("checked", false);
    $("#answer-item-12").prop("checked", false);
    $("#answer-item-21").prop("checked", false);
    $("#answer-item-22").prop("checked", false);
    const reamtext = document.querySelector('span#reamming');

    $.ajax({
        type: 'POST',
        url: 'app/loadTest.php',

        success: function(data) {
            var test = data;
            if (test.status == 'success') {
                pregunta1.textContent = test.p1;
                document.getElementById("pregunta2").value = test.pregunta2;
                pregunta2.textContent = test.p2;
                document.getElementById("pregunta1").value = test.pregunta1;
                progress.style.cssText = test.progress;
                reamtext.textContent = test.reamming;
                updateCountdown();


            } else if (test.status == 'completo') {

                window.location.replace("../testing-end.php");

            } else {
                Swal.fire("Error Al cargar preguntas no regresó error");
            }
        },
        error: function(data) {
            Swal.fire("Error al enviar el formulariol cargar preguntas");
        }
    });

}
