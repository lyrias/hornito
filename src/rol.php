<?php
session_start();
require_once "../conexion.php";
$id = $_GET['id'];
$nombre = $_SESSION['user'];
//$sqlpermisos = mysqli_query($conexion, "SELECT * FROM permisos");
$usuarios = mysqli_query($conexion, "SELECT * FROM usuario WHERE idusuario = $id");
$consulta = mysqli_query($conexion, "SELECT * FROM detalle_permisos WHERE id_usuario = $id");
$resultUsuario = mysqli_num_rows($usuarios);
if (empty($resultUsuario)) {
    header("Location: usuarios.php");
}
$datos = array();
foreach ($consulta as $asignado) {
    $datos[$asignado['id_permiso']] = true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_GET['id'];
    if(isset( $_POST['permisos'])){
        $permisos = $_POST['permisos'];
        mysqli_query($conexion, "DELETE FROM detalle_permisos WHERE id_usuario = $id_user");
        foreach ($permisos as $permiso) {
            $sql = mysqli_query($conexion, "INSERT INTO detalle_permisos (id_usuario, id_permiso) VALUES ($id_user, $permiso)");
        }
        $alert = '
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                Permisos Asignados
            </div>';
    }else{
        $alert = $alert = '
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                Permisos Retirados
            </div>';
        mysqli_query($conexion, "DELETE FROM detalle_permisos WHERE id_usuario = $id_user");
    }

}


include_once "includes/header.php";

?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-lg">
            <div class="card-header card-header-primary">
                Permisos
            </div>
            <div class="card-body">
            <form  method="post">
                <?php echo (isset($alert)) ? $alert : ''; 
                                    $sqlpermisos = mysqli_query($conexion, "SELECT * FROM permisos");
                ?>

                <?php while ($row = mysqli_fetch_assoc($sqlpermisos)) { ?>
                    <div class="form-check form-switch m-2">
                        <label class="form-check-label" for="permisos_<?php echo $row['id']; ?>" class="p-2 text-uppercase">
                            <?php echo $row['nombre']; ?>
                        </label>
                        <input class="form-check-input" id="permisos_<?php echo $row['id']; ?>" type="checkbox" name="permisos[]" 
                            value="<?php echo $row['id']; ?>" <?php
                            if (isset($datos[$row['id']]) && $datos[$row['id']] == 1) { 
                                echo "checked";
                            }
                        ?>>
                    </div>
                <?php } ?>
                
                <br>
                <button class="btn btn-primary btn-block"  type="submit">Modificar</button>
            </form>       
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>