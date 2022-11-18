<?php
//Llamado al modelo y a la vista
if((isset($_POST['f1'])) && ($_POST['f1'] != '') && (isset($_POST['f2'])) && ($_POST['f2'] != '')){
    require_once("../models/cita_model.php");
    $agenda = new Cita();
    $datos = $agenda->getCita($_POST['f1'],$_POST['f2']);
    require_once("../views/cita.php");
}
?>