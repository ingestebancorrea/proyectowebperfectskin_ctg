<?php
//Lamada al modelo
if ((isset($_POST['fecha'])) && ($_POST['fecha'] != '') && (isset($_POST['hora'])) && ($_POST['lugarservicio'] != '') && (isset($_POST['cliente'])) && ($_POST['cliente'] != '') && (isset($_POST['empleado'])) && ($_POST['empleado'] != '') && (isset($_POST['t_servicio'])) && ($_POST['t_servicio'] != '')) {

    include "../models/agenda_model.php";
    $nuevo = new Agenda(); //Creando e instanciando objeto
    $asd = $nuevo->setAgenda($_POST['fecha'], $_POST['hora'],$_POST['lugarservicio'],$_POST['cliente'],$_POST['empleado'],$_POST['t_servicio']);
}

/*Actualizar datos*/
if ((isset($_POST['codigo'])) && ($_POST['codigo'] != '') && (isset($_POST['fecha_m'])) && ($_POST['fecha_m'] != '') && (isset($_POST['hora_m'])) && ($_POST['hora_m'] != '') && (isset($_POST['lugar_m'])) && ($_POST['lugar_m'] != '') && (isset($_POST['cliente_m'])) && ($_POST['cliente_m'] != '') && (isset($_POST['empleado_m'])) && ($_POST['empleado_m'] != '') && (isset($_POST['t_servicio_m'])) && ($_POST['t_servicio_m'] != '')) {
    
    include "../models/agenda_model.php";
    $nuevo1 = new Agenda();
    $asd = $nuevo1->modificarAgenda($_POST['codigo'],$_POST['fecha_m'],$_POST['hora_m'], $_POST['hora_m'],$_POST['lugar_m'],$_POST['cliente_m'],$_POST['empleado_m'],$_POST['t_servicio_m']);
}
?>