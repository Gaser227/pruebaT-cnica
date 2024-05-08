var tablaCategoria;

function crearTablaCategorias() {
    $('#tablaCategoria').DataTable({
        "bDestroy": true,
        language: { 
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
    });
}
function obtenerDatosCategorias(id) {
    var urlSrc = "/obtenerDatosCategorias";
    var datos = new FormData();
    datos = ('id=' + id);
    fetch(urlSrc, {
        method: 'POST',
        body: datos
    }).then(response => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('Error en la solicitud');
    }).then(res => {
        var valores = res.split("/");
        console.log(valores);
        llenarTablaCategorias(valores);
    }).catch(error => {
        console.log(error);
    });
}
function llenarTablaCategorias(valores) {
    tablaCategoria = $("#tablaCategoria").DataTable();
    limpiarTablaCategoria();
    for (let i = 0; i < valores.length-1; i++) {
        var datos = valores[i].split('*')
        tablaCategoria.row.add([
            datos[1],
            datos[2],
            "<input title='Modificar' class='w3-btn w3-blue' type='button' value='&#9989' onclick=modificarCategoria(" + datos[0] +")> <input title='Eliminar' class='w3-btn w3-blue' type='button' value='&#9932' onclick=eliminarCategoria(" + datos[0] +")>"//9998 9920
        ]).draw(false);
    }  
}
function limpiarTablaCategoria() {
    tablaCategoria = $("#tablaCategoria").DataTable();
    tablaCategoria.clear().draw();
}
$(document).ready(function(){
    if (!document.getElementById("formularioCategoria")) {
        crearTablaCategorias();
        obtenerDatosCategorias();
    }
})