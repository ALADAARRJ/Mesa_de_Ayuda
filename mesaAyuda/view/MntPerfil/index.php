<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
		<!DOCTYPE html>
		<html>
			<?php require_once("../MainHead/head.php");?>	
			<title>Mesa de Ayuda :: Perfil</title>
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
									<h3>Perfil</h3>
									<ol class="breadcrumb breadcrumb-simple">
										<li><a href="#">Home</a></li>
										<li class="active">Cambiar Contraseña</li>
									</ol>
								</div>
							</div>
						</div>
					</header>
					<div class="box-typical box-typical-padding">
						<div class="row">
                                <div class="col-lg-6">
									<div class="form-group">
									    <label for="exampleSelect" class="form-label semibold">Nueva Contraseña</label>
										<input type="password" class="form-control" id="txtpass" name="txtpass">

										</select>
									</div>
								</div>
                                <div class="col-lg-6">
									<fieldset class="form-group">
										<label class="form-label semibold" for="tick_titulo">Confirmar Contraseña</label>
										<input type="password" class="form-control" id="txtpassnew" name="txtpassnew">
									</fieldset>
								</div>
								<div class="col-lg-12">
									<button type="button" class="btn btn-rounded btn-inline btn-primary" id="btnactualizar">Actualizar</button>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CONTENIDO -->
			<?php require_once("../MainJS/JS.php");?>
			<script type="text/javascript" src="mntperfil.js"></script>
		</body>
		</html>
<?php
	}else{
		header("Location:"."http://localhost:80/mesaAyuda/"."index.php");
	}
?>