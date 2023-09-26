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
	$dir_img = '../assets/registros/';
	$lista = listarProducto();
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
			<div class="head-title">
				<div class="left">
					<h1>Productos</h1>
				</div>
                
				<a href="agregar_producto.php" class="btn-new">
					<i class='bx bxs-plus-circle' ></i>
                    <span id="btn-abrir-nuevo-producto" class="btn-abrir-nuevo-producto">Nuevo Producto</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Foto</th>
								<th>Nombre</th>
								<th>Precio</th>
                                <th>Stock</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista as $key => $value) :?>
							<tr>
								<td>
									<img src="<?=$dir_img.$value['ruta'];?>">
								</td>
								<td><?=$value['nombre'];?></td>
								<td><?=$value['precio']." Bs.";?></td>
								<td><?=$value['stock'];?></td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
</body>
</html>

