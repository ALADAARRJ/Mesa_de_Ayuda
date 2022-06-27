<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
		<!DOCTYPE html>
		<html>
			<?php require_once("../MainHead/head.php");?>	
			<title>Mesa de Ayuda :: Consultar Ticket</title>
		</head>
		<body class="with-side-menu">

			<?php require_once("../MainHeader/Header.php");?>

			<div class="mobile-menu-left-overlay"></div>

			<?php require_once("../MainNav/nav.php");?>

			<!-- CONTENIDO -->
			<!-- (COMENTAR RAPIDO ALT+SHITF+A) -->
			<div class="page-content">
				<div class="container-fluid">

					<header class="section-header">
						<div class="tbl">
							<div class="tbl-row">
								<div class="tbl-cell">
									<h3>Consultar Ticket</h3>
									<ol class="breadcrumb breadcrumb-simple">
										<li><a href="#">Home</a></li>
										<li class="active">Consultar Ticket</li>
									</ol>
								</div>
							</div>
						</div>
					</header>
					<div class="box-typical box-typical-padding">
						<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
							<thead>
								<tr>
									<th style="width: 5%;">Numero de Ticket</th>
									<th style="width: 10%;">Categoria</th>
									<th class="d-none d-sm-table-cell" style="width: 30%;">Titulo</th>
									<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
									<th class="d-none d-sm-table-cell" style="width: 15%;">Fecha</th>
									<th class="text-center" style="width: 5%;"></th>
								</tr>
							</thead>
						</table>
					</div>

				</div>
			</div>
			<!-- CONTENIDO -->
			<?php require_once("../MainJS/JS.php");?>
			<script type="text/javascript" src="consulta.js"></script>
		</body>
		</html>
<?php
	}else{
		header("Location:"."http://localhost:80/mesaAyuda/"."index.php");
	}
?>