$(document).ready(function() {
    $("#btnCreateProducto").on("click", function() {
    
        var formData = $("#formCreateProducto").serialize();

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "funciones.php", // Ruta a tu archivo PHP
            data: formData + "&action=guardarDatos", // Agregar la acción y los datos del formulario
            success: function(response) {
                // Manejar la respuesta del servidor
                $("#result").html(response);
            },
            error: function(error) {
                console.log("Error: " + error);
            }
        });
    });

});

function abrirCrearProducto(){
    window.location.href = 'crear_productos.php';
}
function abrirEditarProducto(){
    window.location.href = 'editar_productos.php';
}