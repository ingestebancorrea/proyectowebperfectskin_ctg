<?php
class Cliente {
    private $cliente;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->cliente = array();
        $this->db = new PDO('mysql:host=localhost;dbname=perfectskinweb_ctg', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    /*Método insertar*/
    public function setCliente($nombre, $apellidos, $t_identificacion, $nro_identificacion, $direccion,$email) {
        self::setNames();
        $validar = "SELECT * FROM cliente WHERE nro_identificacion='$nro_identificacion'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('Ya existe un registro con este número de identificación'); window.location='/ProyectoWeb_PSCTG/cliente.php';</script>";
        }else{
        $sql = "INSERT INTO cliente(nombre, apellidos, t_identificacion, nro_identificacion, direccion, email) VALUES ('" . $nombre . "', '" . $apellidos . "','" . $t_identificacion. "','" . $nro_identificacion. "','" . $direccion. "','" .$email. "')";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('datos insertados correctamente'); window.location='/ProyectoWeb_PSCTG/cliente.php' </script>";
        } else {
            echo "<script> alert('error en la insercción');</script>";
        }
    }
    }

    /*Método modificar*/
    public function modificarCliente($nro_identificacion_m, $nombre_m,$apellidos_m,$direccion_m,$email_m) {

        self::setNames();
        $sql = "UPDATE cliente SET nombre='$nombre_m', apellidos='$apellidos_m', direccion='$direccion_m', email='$email_m' WHERE nro_identificacion='$nro_identificacion_m'";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('datos actualizados correctamente'); window.location='/ProyectoWeb_PSCTG/cliente.php' </script>";
        } else {
            echo "<script> alert('error en la actualización');</script>";
        }
    }
}

?>