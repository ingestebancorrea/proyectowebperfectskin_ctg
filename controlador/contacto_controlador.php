<?php
//Lamada al modelo
if ((isset($_POST['introducir_nombre'])) && ($_POST['introducir_nombre'] != '') && (isset($_POST['introducir_email'])) && ($_POST['introducir_email'] != '') && (isset($_POST['introducir_telefono'])) && ($_POST['introducir_telefono'] != '') && (isset($_POST['introducir_asunto'])) && ($_POST['introducir_asunto'] != '') && (isset($_POST['introducir_mensaje'])) && ($_POST['introducir_mensaje'] != '')) {

    include "models/contact_model.php";
    $nuevo = new Contacto();
    $asd = $nuevo->setContacto($_POST['introducir_nombre'], $_POST['introducir_email'],$_POST['introducir_telefono'],$_POST['introducir_asunto'],$_POST['introducir_mensaje']);
}

//Llamada a la vista
// $contacto = new Contacto();
// $datos = $contacto->getContacto();
// require_once("../views/contacto.php");
?>