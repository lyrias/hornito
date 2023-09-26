<?php
    
    
    session_start();

    if(!isset($_SESSION['id_usuario'])){
        echo '
            <script>
            alert("Debes de Iniciar Sesion");
            window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }

    include_once "funciones/fun_productos.php";

    if (isset($_POST['send'])){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $dir_subida = '../assets/registros/';
        $fichero_subido =   basename($_FILES['ruta_img']['name']);
        registrarProducto($nombre, $precio, $stock, $fichero_subido);
        if (move_uploaded_file($_FILES['ruta_img']['tmp_name'], '../assets/registros/'.$fichero_subido)) {
            echo '
            <script>
            alert("se registro producto");
            </script>
            ';
        } else {

        }
        
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../assets/css/cssDashBoard/style.css">
    <link rel="stylesheet" href="../assets/css/cssDashBoard/file_img.css">

	<title>AdminHornito</title>
</head>
<body>

<?php
    include 'sidebar.php';
?>
<!-- CONTENT -->
	<section id="content">
    <?php
       include 'navbar.php';
    ?>

		<!-- MAIN -->
		<main>
			<!-- Begin Page Content -->
            <div class="table-data">
                <form action="agregar_producto.php" enctype="multipart/form-data" method="post" id="formulario">
                    
                    <div class="form">
                        
                    <div class="head-title">
                        <div class="left">
                            <h1>Agregar Productos</h1>
                        </div>
			        </div>
                    
                        <div class="grupo">
                            <input type="text" name="nombre" id="jsNombre" required><span class="barra"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="precio" id="jsPrecio" required><span class="barra"></span>
                            <label>Precio</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="stock" id="jsStock" required><span class="barra"></span>
                            <label>Stock</label>
                        </div>
                        <div class="grupo">
                            <center>
                                <br>
                                <img  src="../assets/img/default.png" id="imagenPrevisualizacion" width="250" height="250" name="ruta">
                                <br>
                                <div class="file-select" >
                                    <input type="file" name="ruta_img" aria-label="Archivo" id="seleccionArchivos" accept="image/*">
                                </div>                      
                            </center>
                        </div>
                        <button type="submit"  name="send" >Registrar</button>
                    </div>
                </form>
            </div>
            <!-- -->
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="../assets/js/subir_fotos.js"></script>
</body>
</html>

