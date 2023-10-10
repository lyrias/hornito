<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="../assets/css/cssDashBoard/styleventas.css">
	<title>AdminHub</title>
</head>
<body>

<!--
    include 'sidebar.php';
-->	


	<!-- CONTENT -->
		<!-- NAVBAR -->
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="content">
			<div class="head-title">
				<div class="left">
					<h1>Modulo Ventas</h1>
				</div>
				<div>
					<a href="bienvenida.php">
						<span class="btn-proc">VOLVER</span>
					</a>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<table style="width: 100%;">
					<!--
					include "ventasconexion.php";
					$datos_productos = mysqli_query($conexion, "SELECT id_producto, nombre, ruta, precio, stock FROM productos") or die("Problemas con la consulta");
					while($reg = mysqli_fetch_array($datos_productos)){
						echo "<input name='cantidad' id='cantidad". $reg['id_producto'] ."' value='el id del prod' class='pl-2' />";
						echo "<th>". $reg['nombre'] ."</th>";
						echo "<th>". $reg['precio'] ."</th>";
						echo "<th>". $reg['stock'] ."</th>";
						echo "<br>";
				
					}
					#cerrramos la conexion
    				mysqli_close($conexion);
					
					</table>
					-->
					<!--
					<table style="width: 100%;">
						<tr>
							<th>Efectivo</th>
							<th>Precio Total</th>
							<th>Vuelto</th>
							<th>Calcular</th>
							<th>Cobrar</th>
						</tr>

					</table>
					-->
				</li>
				<li>
					<table style="width: 100%;">
						<tr>
							<th>Efectivo</th>
							<th>Precio Total</th>
							<th>Vuelto</th>
							<th>Calcular</th>
							<th>Cobrar</th>
						</tr>
						<tr>
							<td><input type='totalS' id="efectivo" class="text"></td>
							<td><input type='totalS' id="total" value="0 Bs" class="text"></td>
							<td><input type='totalS' id="vuelto" value="0 Bs" class="text"></td>
							<td><button class="btn-proc" onclick="calcular();">CALCULAR</button></td>
							<td><button class="btn-proc" onclick="total();">COBRAR</button></td>
						</tr>
					</table>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
					</div>
					<table style="width: 100%;">
						<thead>
							<tr>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th>Stock</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							include "ventasconexion.php";
							$datos_productos = mysqli_query($conexion, "SELECT id_producto, nombre, ruta, precio, stock FROM productos") or die("Problemas con la consulta");
							while($reg = mysqli_fetch_array($datos_productos)){
							?>

							<tr>
								<td><p id="texto<?php echo $reg['id_producto']; ?>"><?php echo $reg['nombre']; ?></p><button type="buttonw" onclick="aumentar<?php echo $reg['id_producto']; ?>();" oncontextmenu="disminuir<?php echo $reg['id_producto']; ?>();"> <img src="../assets/img/<?php echo $reg['ruta']; ?>" /></button></td>

								<td><input class='text' id="cantidad<?php echo $reg['id_producto']; ?>" value="0"></td>

								<td><?php echo $reg['precio']; ?></td>

								<td><span class="status completed"><?php echo $reg['stock']; ?></span></td>

								<td><input type='totalS' id="total<?php echo $reg['id_producto']; ?>" value="0 Bs" class="text"></td>
							</tr>

							<?php
							}
							#cerrramos la conexion
							mysqli_close($conexion);
							?>

							<!--
							<tr>
								<td>
								<p id="texto2" >Salteña de Hojaldre</p>
								<button type="buttonw" onclick="aumentarSP();" oncontextmenu="disminuirSP();"> <img src="../assets/img/saltenahojaldre1.png" /></button>
								</td>
								<td>
								<input class='text' id="cantidadSP" value="0">
								</td>
								<td>7bs</td>
								<td><span class="status pending">Stock Bajo</span></td>
								<td><input type='totalS' id="total2" value="0 Bs" class="text"></td>
							</tr>


							<tr>
								<td>
								<p id="texto3">Mini Gaseaso Sprite</p>
								<button type="buttonw" onclick="aumentarMS();" oncontextmenu="disminuirMS();"> <img src="../assets/img/minisprite1.png" /></button>
								</td>
								<td>
								<input class='text' id="cantidadMS" value="0">
								</td>
								<td>2bs</td>
								<td><span class="status process">Stock Medio</span></td>
								<td><input type='totalS' id="total3" value="0 Bs" class="text"></td>
							</tr>
							-->
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	
	

	<script src="../assets/js/buttons.js"></script>
</body>
</html>

