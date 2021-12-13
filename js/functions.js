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
                        icon: 'Error',
                        title: "<strong>Error:</strong> ",
                        message: "La carrera seleccionada no realiza Test Psicométrico"
                    }, {
                        type: 'primary'
                    });
                } else if (result == 1) {
                    $.notify({
                        icon: 'Success',
                        title: "<strong>Correcto:</strong> ",
                        message: "Bienvenido"
                    }, {
                        type: 'primary'
                    });
                }else if (result == 2) {
                    $.notify({
                        icon: 'Error',
                        title: "<strong>Error:</strong> ",
                        message: "Usuario y/o contraseña incorrectos"
                    }, {
                        type: 'primary'
                    });
                }
            },
            error: function(data) {
                /*
                 * Se ejecuta si la peticón ha sido erronea
                 * */
                $.notify({
                    icon: 'Error',
                    title: "<strong>Error:</strong> ",
                    message: "Problemas al tratar de enviar el formulario"
                }, {
                    type: 'secondary'
                });
                //alert("");
            }
        });
        // Nos permite cancelar el envio del formulario
        return false;
    });
});