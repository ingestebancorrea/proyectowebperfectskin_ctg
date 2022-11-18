<?php
class Contacto {
    private $contacto;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->conctacto = array();
        $this->db = new PDO('mysql:host=localhost:3306;dbname=lauranuñezpsctg_db; charset=utf8mb4', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    /*Método insertar*/
    public function setContacto($nombre, $email, $telefono, $asunto, $mensaje) {

        self::setNames();
        $sql = "INSERT INTO contacto(nombre, email, telefono, asunto, mensaje) VALUES ('" . $nombre . "', '" . $email . "','" . $telefono. "','" . $asunto. "','" . $mensaje. "')";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('datos insertados correctamente'); window.location='/ProyectoWeb_PSCTG/contacto.php' </script>";
        } else {
            echo "<script> alert('error en la insercción');</script>";
        }
    }
}
?>