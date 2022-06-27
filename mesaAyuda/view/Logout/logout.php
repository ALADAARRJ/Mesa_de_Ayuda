<?php
    require_once("../../config/conexion.php");
    session_destroy();
    header("Location:"."http://localhost:80/mesaAyuda/"."index.php");
    exit();
?>