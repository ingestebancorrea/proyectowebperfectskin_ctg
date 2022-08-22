<?php
class Login {
    private $login;
    private $db;
    
    /*Crea conexión a DB*/
    public function __construct() {
        $this->login = array();
        $this->db = new PDO('mysql:host=localhost;dbname=perfectskinweb_ctg', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function setRegistrar($usuario, $pass){
        self::setNames();
        $sql = "INSERT INTO login(usuario,password) VALUES ('$usuario','$pass')";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('Usuario registrado con exito: $usuario'); window.location='login_ingreso.php';</script>";
        } else {
            echo "Error: ".$sql."<br>".mysql_error($db);
        }
    }
    }
?>