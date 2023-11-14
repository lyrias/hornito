<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="../assets/css/cssDashBoard/styleventas.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
							<td><button type="totalS" class="btn-proc" data-toggle="modal" data-target="#exampleModal">COBRAR</button></td>
							<!-- Button trigger modal -->

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Se va a Cobrar los productos
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" onclick="cancelar();" data-dismiss="modal">Cancelar</button>
									<a href="ventasactualizar.php?stock_origen=<script>document.getElementById('vuelto').value;</script>&texto=Esto es una variable texto">
										<span type="button" class="btn btn-primary">Cobrar</span>
									</a>
								
								</div>
								</div>
							</div>
							</div>
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
								<td><p id="texto<?php echo $reg['id_producto']; ?>"><?php echo $reg['nombre']; ?></p><button class="buttonw" onclick="aumentar(1,<?php echo $reg['precio']; ?>, <?php echo $reg['id_producto']; ?>);" oncontextmenu="disminuir(1,<?php echo $reg['precio']; ?>, <?php echo $reg['id_producto']; ?>);"> <img src="../assets/img/PNG/<?php echo $reg['ruta']; ?>" /></button></td>
						
								<td><input class='text' id="cantidad<?php echo $reg['id_producto']; ?>" value="0"></td>
								
								<td> <span value="<?php echo $reg['precio']; ?>" id="precio<?php echo $reg['id_producto']; ?>"> <?php echo $reg['precio']; ?> </span></td>
								
								<td><span id="stock<?php echo $reg['id_producto']; ?>" class="status completed"><?php echo $reg['stock']; ?></span></td>

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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

