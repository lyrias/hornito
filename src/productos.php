<?php
session_start();
include "../conexion.php";
$id_user = $_SESSION['idUser'];
$nombre = $_SESSION['user'];
$permiso = "productos";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header('Location: permisos.php');
}
if (!empty($_POST)) {
    $alert = "";
    $mensaje = "";
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    if (empty($producto) || empty($precio) || $precio <  0 || empty($cantidad) || $cantidad <  0) {
        $mensaje = 'Todo los campos son obligatorios';
        $alert = 'danger';
    } else {
        if (empty($id)) {
            $query = mysqli_query($conexion, "SELECT * FROM producto WHERE codigo = '$codigo'");
            $result = mysqli_fetch_array($query);
            if ($result > 0) {
                $mensaje = 'El codigo ya existe';
                $alert = 'danger';
            } else {
                $query_insert = mysqli_query($conexion, "INSERT INTO producto(codigo,descripcion,precio,existencia) values ('$codigo', '$producto', '$precio', '$cantidad')");
                if ($query_insert) {
                    $mensaje = 'Producto registrado';
                    $alert = 'success';
                } else {
                    $mensaje = 'Error al registrar el producto';
                    $alert = 'danger';
                }
            }
        } else {
            $query_update = mysqli_query($conexion, "UPDATE producto SET  descripcion = '$producto', precio= $precio, existencia = $cantidad WHERE codproducto = $id");
            if ($query_update) {
                $mensaje = 'Producto Modificado';
                $alert = 'success';
            } else {
                $mensaje = 'Error al modificar';
                $alert = 'danger';
            }
        }
    }
}
include_once "includes/header.php";
?>
<button onclick="abrirCrearProducto()" class="btn btn-primary mb-2" >Nuevo Producto</button>

<div class="card">
    <div class="card-body">
    <?php if (isset($mensaje)) {
            echo '<div class="alert alert-' . $alert . ' alert-style-light" role="alert">
                <i class="fas fa-times-circle"></i> ' . $mensaje . '
            </div>';
        } ?>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="tbl">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../conexion.php";

                        $query = mysqli_query($conexion, "SELECT * FROM producto");
                        $result = mysqli_num_rows($query);
                        if ($result > 0) {
                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                <tr>
                                    <td><?php echo $data['codproducto']; ?></td>
                                    <td><?php echo $data['descripcion']; ?></td>
                                    <td><?php echo $data['precio']; ?></td>
                                    <td><?php echo $data['existencia']; ?></td>
                                    <td>
                                            <a href="editar_productos.php?id=<?php echo $data['codproducto']; ?>" class="btn btn-primary margin-0"><i class='fas fa-edit'></i></a>
                                            <form action="eliminar_producto.php?id=<?php echo $data['codproducto']; ?>" method="post" class="confirmar d-inline">
                                                <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                            </form>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once "includes/footer.php"; ?>