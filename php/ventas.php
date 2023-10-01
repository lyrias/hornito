<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../assets/css/cssDashBoard/styleventas.css">
	<link rel="stylesheet" href="../assets/css/cssDashBoard/mods.css">
	<link rel="stylesheet" href="../assets/css/cssDashBoard/ventas.css">
	<title>AdminHub</title>
</head>
<body>

<?php
    include 'sidebar.php';
?>


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../assets/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Modulo Ventas</h1>
				</div>
				<a href="#" class="btn-download" onclick="total()">
					<span class="text">COBRAR</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<input type='totalS' id="total" value="0 Bs">
						<p>Precio Total</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Producto</th>
								<th>Precio</th>
								<th>Estado Stock</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								<button type="buttonw" onclick="aumentarSC();" oncontextmenu="disminuirSC();"> <img src="../assets/img/saltenacarne.png" /></button>

								<input type='textfield' id="cantidadSC" value="0">
								<br>
								<p id="texto1">Salteña de Carne</p>
								</td>
								<td>6bs</td>
								<td><span class="status completed">Stock Alto</span></td>
							</tr>


							<tr>
								<td>
								<button type="buttonw" onclick="aumentarSP();" oncontextmenu="disminuirSP();"> <img src="../assets/img/saltenahojaldre.png" /></button>

								<input type='textfield' id="cantidadSP" value="0">
								<br>
								<p id="texto2" >Salteña de Hojaldre</p>
								</td>
								<td>7bs</td>
								<td><span class="status pending">Stock Bajo</span></td>
							</tr>


							<tr>
								<td>
								<button type="buttonw" onclick="aumentarMS();" oncontextmenu="disminuirMS();"> <img src="../assets/img/minisprite.png" /></button>

								<input type='textfield' id="cantidadMS" value="0">
								<br>
								<p id="texto3">Mini Gaseaso Sprite</p>
								</td>
								<td>2bs</td>
								<td><span class="status process">Stock Medio</span></td>
							</tr>

						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	
	

	<script src="../assets/js/buttons.js"></script>
	<script src="../assets/js/dashboard.js"></script>
</body>
</html>

