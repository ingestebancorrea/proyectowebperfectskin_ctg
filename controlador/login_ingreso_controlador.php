<?php
if (isset($_POST["usuario"]) && isset($_POST["pass"])) {

	require_once("../models/login_ingreso_model.php");
	$validar = new Login();
	$validar->validarDatos($_POST["usuario"], $_POST["pass"]);

} else {
	header("location:../views/login_ingreso.php");
}
?>
}