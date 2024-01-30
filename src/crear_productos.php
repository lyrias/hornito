<?php
session_start();
require_once "../conexion.php";
$nombre = $_SESSION['user'];
include_once "includes/header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y limpiar los datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $precio = mysqli_real_escape_string($conexion, $_POST["precio"]);
    $cantidad = mysqli_real_escape_string($conexion, $_POST["cantidad"]);
    // Insertar datos en la tabla 'productos'
    $sql = "INSERT INTO producto (descripcion, precio, existencia) VALUES ('$nombre', $precio, $cantidad)";
    

    sleep(1);
    if (mysqli_query($conexion, $sql)) {

        echo "
            <script>
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Registro Exitoso',
                    showConfirmButton: false,
                    timer: 1000
                });
            </script>";
    } else {

    }
}

?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center " style="width: 25rem;">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nuevo Producto</h4>
                    </div>
                    <div class="card-body">
                        <?php echo isset($alert) ? $alert : ''; ?>
                        <div id="alerta" style="display: none;"></div>
                        <form action="crear_productos.php" autocomplete="off" method="post" class="p-3">
                            <div class="form-group mb-3">
                                <label>Producto:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Nombre del Producto" required >
                            </div>
                            <div class="form-group mb-3">
                                <label>Precio:</label>
                                <input type="number" step="any" 
                                 name="precio" id="precio" class="form-control"   placeholder="Precio del Producto" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Cantidad:</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control"   placeholder="Cantidad del Producto" required>
                            </div>
                            <div class="float-end">
                                <button type="submit" id="btnCreateProducto" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Datos</button>
                            </div>

                        </form>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include_once "includes/footer.php"; ?>