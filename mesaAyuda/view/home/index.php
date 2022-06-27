<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
		<!DOCTYPE html>
		<html>
			<?php require_once("../MainHead/head.php");?>	
			<title>Mesa de Ayuda :: Home</title>
		</head>
		<body class="with-side-menu">

			<?php require_once("../MainHeader/Header.php");?>

			<div class="mobile-menu-left-overlay"></div>

			<?php require_once("../MainNav/nav.php");?>

			<!-- CONTENIDO -->
			<!-- (COMENTAR RAPIDO ALT+SHITF+A) -->
			<div class="page-content">
				<div class="container-fluid">
					
				</div>
			</div>
			<!-- CONTENIDO -->
			<?php require_once("../MainJS/JS.php");?>
			<script type="text/javascript" src="home.js"></script>
		</body>
		</html>
<?php
	}else{
		header("Location:"."http://localhost:80/mesaAyuda/"."index.php");
	}
?>