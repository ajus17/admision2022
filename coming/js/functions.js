$(document).ready(function() {
    $("#login").bind("submit", function() {
        // Capturamnos el boton de envío
        var btnEnviar = $("#btnEntrar");
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
                btnEnviar.val("Enviando"); // Para input de tipo button
                btnEnviar.attr("disabled", "disabled");
            },
            complete: function(data) {
                /*
                 * Se ejecuta al termino de la petición
                 * */
                btnEnviar.val("Enviar formulario");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data) {
                /*
                 * Se ejecuta cuando termina la petición y esta ha sido
                 * correcta
                 * */
                var result = data;
                if (result == 0) {
                    $.notify({
                        icon: 'error',
                        title: "<strong>Error:</strong> ",
                        message: "Usuario y/o Contraseña Incorrecta"
                    }, {
                        type: 'primary'
                    });
                } else {
                    window.location = '../testform.php';
                    return true;
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