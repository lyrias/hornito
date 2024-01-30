<?php
session_start();
require_once "../conexion.php";
$nombre = $_SESSION['user'];
include_once "includes/header.php";
$id = $_GET['id'];
//echo $id;
$sql= "SELECT * FROM producto WHERE codproducto = $id";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($result);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y limpiar los datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $precio = mysqli_real_escape_string($conexion, $_POST["precio"]);
    $cantidad = mysqli_real_escape_string($conexion, $_POST["cantidad"]);
    // Insertar datos en la tabla 'productos'
    $sql = "UPDATE producto SET descripcion = '$nombre', precio = '$precio', existencia = '$cantidad' WHERE codproducto = $id";
    

    sleep(1);
    if (mysqli_query($conexion, $sql)) {

        echo "
            <script>
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Actualizacion Exitosa',
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
                        <h4 class="card-title">Editar Producto</h4>
                    </div>
                    <div class="card-body">
                        <?php 
                            $sql= "SELECT * FROM producto WHERE codproducto = $id";
                            $result = mysqli_query($conexion, $sql);
                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <div id="alerta" style="display: none;"></div>
                        <form action="editar_productos.php?id=<?php echo $row['codproducto']; ?>" autocomplete="off" method="post" class="p-3">
                            <div class="form-group mb-3">
                                <label>Producto:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Nombre del Producto" value="<?php echo $row['descripcion']; ?>"required >
                            </div>
                            <div class="form-group mb-3">
                                <label>Precio:</label>
                                <input type="number" step="any" 
                                 name="precio" id="precio" class="form-control"   placeholder="Precio del Producto" value="<?php echo $row['precio']; ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Cantidad:</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control"   placeholder="Cantidad del Producto" value="<?php echo $row['existencia']; ?>" required>
                            </div>
                            <div class="float-end">
                                <button type="submit"  class="btn btn-primary"><i class="fas fa-save"></i> Actualizar Datos</button>
                            </div>

                        </form>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include_once "includes/footer.php"; ?>