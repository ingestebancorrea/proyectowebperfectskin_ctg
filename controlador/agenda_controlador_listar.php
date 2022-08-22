<?php
//Llamado a la vista
require_once("../models/agenda_model.php");
$agenda = new Agenda();
$datos = $agenda->getAgenda();
require_once("../views/agenda.php");
?>