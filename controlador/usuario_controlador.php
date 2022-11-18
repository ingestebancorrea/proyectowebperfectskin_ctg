<?php
//Llamado al modelo
//Insercción de datos
if ((isset($_POST['username'])) && ($_POST['username'] != '') && isset($_POST['password']) && ($_POST['password'] != '') && (isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && (isset($_POST['t_identificacion'])) && ($_POST['t_identificacion'] != '') && (isset($_POST['nro_identificacion'])) && ($_POST['nro_identificacion'] != '')  && (isset($_POST['email'])) && ($_POST['email'] != '') && (isset($_POST['direccion'])) && ($_POST['direccion'] != '') && (isset($_POST['t_usuario'])) && ($_POST['t_usuario'] != '')){
    require_once("models/usuario_model.php");
    $nuevo = new Usuario();
    $asd = $nuevo->setUsuario($_POST['username'],$_POST['password'],$_POST['nombre'], $_POST['apellidos'],$_POST['t_identificacion'],$_POST['nro_identificacion'],$_POST['email'],$_POST['direccion'],$_POST['t_usuario']);
}

/*Actualizar datos*/
if ((isset($_POST['nro_identificacion_m'])) && ($_POST['nro_identificacion_m'] != '') && (isset($_POST['nombre_m'])) && ($_POST['nombre_m'] != '') && (isset($_POST['apellidos_m'])) && ($_POST['apellidos_m'] != '') && (isset($_POST['direccion_m'])) && ($_POST['direccion_m'] != '') && (isset($_POST['email_m'])) && ($_POST['email_m'] != '')) {
    include "models/usuario_model.php";
    $nuevo1 = new Usuario();
    $asd = $nuevo1->modificarUsuario($_POST['nro_identificacion_m'],$_POST['nombre_m'], $_POST['apellidos_m'],$_POST['direccion_m'],$_POST['email_m']);
}

//Llamado a la vista
// $cliente = new Cliente();
// $datos = $cliente->getCliente();
// require_once("../views/vista.php");
?>