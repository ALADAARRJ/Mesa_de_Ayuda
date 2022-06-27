<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");

    $usuario = new Usuario();

    switch($_GET["op"]){
        case "password":
            $usuario->update_usuario_pass($_POST["usu_id"],$_POST["usu_pass"]);
        break;
    }
?>