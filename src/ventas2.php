<?php
session_start();
require("../conexion.php");
$id_user = $_SESSION['idUser'];
$nombre = $_SESSION['user'];
$permiso = "nueva_venta";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header('Location: permisos.php');
}
include_once "includes/header.php";
?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="producto" onclick="manejarPedido('pesi', 10)">
                                    <img src="imagenes/hornito.jpg" alt="Producto 1" class="img-fluid" width="100" height="100">
                                    <p>pepsi - 10 Bs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="producto" onclick="manejarPedido('fanta', 2)">
                                    <img src="imagenes/hornito.jpg" alt="Producto 1" class="img-fluid" width="100" height="100">
                                    <p>fanta - 2 Bs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="producto" onclick="manejarPedido('cocca cola', 3)">
                                    <img src="imagenes/hornito.jpg" alt="Producto 1" class="img-fluid" width="100" height="100">
                                    <p>coca cola - 3 Bs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="producto" onclick="manejarPedido('sprite', 4)">
                                    <img src="imagenes/hornito.jpg" alt="Producto 1" class="img-fluid" width="100" height="100">
                                    <p>sprite - 4 Bs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            

            <div class="col-md-6">
                <div class="lista-ventas">
                    <h2>Lista de Ventas</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col"></th> <!-- Para el botón de quitar -->
                            </tr>
                        </thead>
                        <tbody id="lista">
                            <!-- Aquí se agregarán los productos seleccionados -->
                        </tbody>
                    </table>
                    <p>Total: $<span id="total">0.00</span></p>
                    <button class="btn btn-primary" onclick="generarVenta()">Generar Venta</button>
                </div>
            </div>
        </div>
    </div>

<script>
// JavaScript (script.js)
var productosEnLista = {}; // Objeto para almacenar los productos y sus cantidades
var total = 0; // Variable para almacenar el total de la compra

function manejarPedido(nombreProducto, precio) {
    // Verificar si el producto ya está en la lista
    if (productosEnLista[nombreProducto]) {
        // Si ya está en la lista, aumentar la cantidad
        productosEnLista[nombreProducto].cantidad++;
        productosEnLista[nombreProducto].subtotal = productosEnLista[nombreProducto].cantidad * precio;
    } else {
        // Si no está en la lista, agregarlo con cantidad 1
        productosEnLista[nombreProducto] = { cantidad: 1, precio: precio, subtotal: precio };
    }

    // Actualizar la lista en el HTML
    actualizarLista();

    // Calcular el nuevo total
    total += precio;
    actualizarTotal();
}

function disminuirCantidad(nombreProducto) {
    if (productosEnLista[nombreProducto].cantidad > 1) {
        // Si la cantidad es mayor a 1, disminuir la cantidad
        productosEnLista[nombreProducto].cantidad--;
        productosEnLista[nombreProducto].subtotal = productosEnLista[nombreProducto].cantidad * productosEnLista[nombreProducto].precio;
    } else {
        // Si la cantidad es 1, quitar el producto de la lista
        total -= productosEnLista[nombreProducto].precio;
        actualizarTotal();
        delete productosEnLista[nombreProducto];
    }

    // Actualizar la lista en el HTML
    actualizarLista();

    // Calcular el nuevo total
    total -= productosEnLista[nombreProducto].precio;
    actualizarTotal();
}

function actualizarLista() {
    var listaVentas = document.getElementById('lista');
    listaVentas.innerHTML = '';

    // Recorrer el objeto de productosEnLista y actualizar la lista HTML
    for (var producto in productosEnLista) {
        var datosProducto = productosEnLista[producto];
        var nuevoElemento = document.createElement('tr');
        nuevoElemento.innerHTML = `
            <td>${producto}</td>
            <td>${datosProducto.cantidad}</td>
            <td>$${datosProducto.precio.toFixed(2)}</td>
            <td>$${datosProducto.subtotal.toFixed(2)}</td>
            <td><button class="btn btn-sm btn-danger" onclick="disminuirCantidad('${producto}')">-</button></td>
        `;
        listaVentas.appendChild(nuevoElemento);
    }
}

function actualizarTotal() {
    var totalElemento = document.getElementById('total');
    totalElemento.textContent = total.toFixed(2);
}

</script>
<?php include_once "includes/footer.php"; ?>