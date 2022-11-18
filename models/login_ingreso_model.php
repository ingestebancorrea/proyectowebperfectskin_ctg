<?php
class Login{
    private $login;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->login = array();
        $this->db = new PDO('mysql:host=localhost:3306;dbname=lauranuñezpsctg_db; charset=utf8mb4', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }
    
    public function validarDatos($usuario, $pass) {
        self::setNames();
            $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND password = '$pass'";
            $result = $this->db->query($sql);

            $cantidad_resultado = $result->rowCount();

            if ($cantidad_resultado == 1) {
                echo "<script> alert('Bienvenido $usuario'); window.location='../views/dashboard.html';</script>";
            } else {
                echo "<script> alert('Usuario no existe'); window.location='/views/login_ingreso.php';</script>";  

            }
    }       
}