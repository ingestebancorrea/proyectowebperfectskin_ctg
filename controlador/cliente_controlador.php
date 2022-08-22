<?php
//Llamado al modelo
//Insercción de datos
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && (isset($_POST['t_identificacion'])) && ($_POST['t_identificacion'] != '') && (isset($_POST['nro_identificacion'])) && ($_POST['nro_identificacion'] != '') && (isset($_POST['direccion'])) && ($_POST['direccion'] != '') && (isset($_POST['email'])) && ($_POST['email'] != '')) {
    require_once("models/cliente_model.php");
    $nuevo = new Cliente();
    $asd = $nuevo->setCliente($_POST['nombre'], $_POST['apellidos'],$_POST['t_identificacion'],$_POST['nro_identificacion'],$_POST['direccion'],$_POST['email']);
}

/*Actualizar datos*/
if ((isset($_POST['nro_identificacion_m'])) && ($_POST['nro_identificacion_m'] != '') && (isset($_POST['nombre_m'])) && ($_POST['nombre_m'] != '') && (isset($_POST['apellidos_m'])) && ($_POST['apellidos_m'] != '') && (isset($_POST['direccion_m'])) && ($_POST['direccion_m'] != '') && (isset($_POST['email_m'])) && ($_POST['email_m'] != '')) {
    include "models/cliente_model.php";
    $nuevo1 = new Cliente();
    $asd = $nuevo1->modificarCliente($_POST['nro_identificacion_m'],$_POST['nombre_m'], $_POST['apellidos_m'],$_POST['direccion_m'],$_POST['email_m']);
}

//Llamado a la vista
// $cliente = new Cliente();
// $datos = $cliente->getCliente();
// require_once("../views/vista.php");
?>