$(document).ready(function() {
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [20, 50, 100, -1],
            [20, 50, 100, "TODO"]
        ],
        responsive: false,
        language: {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }

        }
    });

    var table = $('#datatables').DataTable();

    // Edit record
    table.on('click', '.view', function() {

        $tr = $(this).closest('tr');
        var codIntento = { 'codIntento': $tr.data('id') };

        $.ajax({
            type: 'POST',
            url: 'app/results-data.php',
            data: codIntento,

            success: function(data) {
                var resultados = data;
                if (resultados.status == 'success') {
                    Swal.fire({
                        title: '<strong>' + resultados.estudiante + '</u></strong>',
                        icon: 'info',
                        html: resultados.o1 + '     ' + resultados.o2 + '<br>' +
                            'CAA:  ' + resultados.CAA + '<br>' +
                            'CAC: ' + resultados.CAC + '<br>' +
                            'CAE: ' + resultados.CAE + '<br>' +
                            ' CC: ' + resultados.CC + '<br>' +
                            'CEA: ' + resultados.CEA + '<br>' +
                            'CEI: ' + resultados.CEI + '<br>' +
                            ' CH: ' + resultados.CH + '<br>' +
                            'CPI: ' + resultados.CPI + '<br>' +
                            ' CS: ' + resultados.CS + '<br>' +
                            ' CT: ' + resultados.CT,
                        confirmButtonClass: 'btn btn-primary',
                        confirmButtonColor: '#9c27b0',
                        showConfirmButton: true,
                        focusConfirm: false
                    })

                } else {
                    Swal.fire("Error");

                }
            },
            error: function(data) {
                Swal.fire("Error xx");
            }
        });
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });


});