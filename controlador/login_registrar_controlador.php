<?php
//Lamada al modelo
if ((isset($_POST['usuario'])) && ($_POST['usuario'] != '') && (isset($_POST['pass'])) && ($_POST['pass'] != '')) {

    require_once("../models/login_registrar_model.php") ;
    $nuevo = new Login(); //Creando e instanciando objeto
    $asd = $nuevo->setRegistrar($_POST['usuario'], $_POST['pass']);
}

//Llamada a la vista
// $contacto = new Login();
// $datos = $contacto->getlogin();
// require_once("../views/login.php");
?>