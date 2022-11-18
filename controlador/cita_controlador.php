<?php
//Lamada al modelo
if ((isset($_POST['fecha'])) && ($_POST['fecha'] != '') && (isset($_POST['hora'])) && (($_POST['hora'] != '')) && (isset($_POST['lugarservicio'])) && ($_POST['lugarservicio'] != '')) {

    include "../models/cita_model.php";
    $nuevo = new Cita(); //Creando e instanciando objeto
    $asd = $nuevo->setCita($_POST['fecha'], $_POST['hora'],$_POST['lugarservicio'],$_POST['cliente']);
}

/*Actualizar datos*/
if ((isset($_POST['codigo'])) && ($_POST['codigo'] != '') && (isset($_POST['fecha_m'])) && ($_POST['fecha_m'] != '') && (isset($_POST['hora_m'])) && ($_POST['hora_m'] != '') && (isset($_POST['lugar_m'])) && ($_POST['lugar_m'] != '')) {
    
    include "../models/cita_model.php";
    $nuevo1 = new Cita();
    $asd = $nuevo1->modificarCita($_POST['codigo'],$_POST['fecha_m'],$_POST['hora_m'],$_POST['lugar_m']);
}
?>