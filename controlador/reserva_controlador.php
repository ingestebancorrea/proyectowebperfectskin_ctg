<?php
//Lamada al modelo
if ((isset($_POST['fecha'])) && ($_POST['fecha'] != '') && (isset($_POST['hora'])) && (($_POST['hora'] != '')) && (isset($_POST['lugarservicio'])) && ($_POST['lugarservicio'] != '')) {

    include "../models/cita_model.php";
    $nuevo = new Cita(); //Creando e instanciando objeto
    $asd = $nuevo->setCita($_POST['fecha'], $_POST['hora'],$_POST['lugarservicio'],$_POST['cliente']);
}


?>