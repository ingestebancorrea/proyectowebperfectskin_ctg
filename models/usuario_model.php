<?php
class Usuario {
    private $usuario;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost:3306;dbname=lauranuñezpsctg_db; charset=utf8mb4', "root", "");;
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    /*Método insertar*/
    public function setUsuario($username,$password,$nombre, $apellidos, $t_identificacion, $nro_identificacion,$email,$direccion,$t_usuario) {
        self::setNames();
        $validar = "SELECT * FROM usuarios WHERE nroDocumento='$nro_identificacion'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('Ya existe un registro con este número de identificación'); window.location='/ProyectoWeb_PSCTG/usuario.php';</script>";
        }else{
            $sql = "INSERT INTO usuarios(`username`, `password`, `nombre`, `apellidos`, `tipoDocumento`, `nroDocumento`, `email`, `direccion`, `tipoUsuario`, `estado`) VALUES ('" . $username . "','" . $password . "','" . $nombre . "', '" . $apellidos . "','" . $t_identificacion. "','" . $nro_identificacion. "','" .$email. "','" . $direccion. "','" . $t_usuario. "','Activo')";
            
            if($tipo_usuario == 'Cliente'){
                $query = "INSERT INTO clientes VALUES()";
            }else if($tipo_usuario == 'Esteticista'){
                $query = "INSERT INTO esteticistas VALUES()";
            }
            
            $result = $this->db->query($sql);

            if ($result==true) {
                echo "<script> alert('datos insertados correctamente'); window.location='/ProyectoWeb_PSCTG/usuario.php' </script>";
            } else {
                echo "<script> alert('error en la insercción');</script>";
            }
        }
    }

    /*Método modificar*/
    public function modificarUsuario($nro_identificacion_m, $nombre_m,$apellidos_m,$email_m,$direccion_m) {

        self::setNames();
        $sql = "UPDATE usuarios SET nombre='$nombre_m', apellidos='$apellidos_m', email='$email_m',direccion='$direccion_m' WHERE nroDocumento='$nro_identificacion_m'";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('datos actualizados correctamente'); window.location='/ProyectoWeb_PSCTG/usuario.php'; </script>";
        } else {
            echo "<script> alert('error en la actualización'); window.location='/ProyectoWeb_PSCTG/usuario.php'; </script>";
        }
    }
}

?>