<?php
class Agenda {//Trabajando con la clase del objeto creeado en la vista
    private $agenda;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->contacto = array();
        $this->db = new PDO('mysql:host=localhost;dbname=perfectskinweb_ctg', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    
    /*Método insertar*/
    public function setAgenda($fecha, $hora, $lugar_servicio, $cliente, $empleado, $t_servicio) {
        $estado = "Agendada";
        self::setNames();

        //Consulta para verificar que el registro no exista
        $validar = "SELECT * FROM agenda WHERE fecha='$fecha' and hora='$hora'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('La fecha y hora seleccionada ya se encuentra agendada, selecciona otro espacio en la agenda!'); window.location='../views/servicios.php';</script>";
        }else{
        //Consulta para insertar datos
        $sql = "INSERT INTO agenda(fecha, hora, lugar_servicio, cliente, empleado, servicio, estado) VALUES ('" . $fecha . "', '" . $hora . "','" . $lugar_servicio. "','" . $cliente. "','" . $empleado. "','" . $t_servicio. "','" . $estado. "')";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('cita agendada correctamente'); window.location='/ProyectoWeb_PSCTG/views/servicios.php' </script>";
        } else {
            echo "<script> alert('error en la insercción de la cita');</script>";
        }

        }
        
    }

    public function getAgenda() {

        self::setNames();
        $sql = "SELECT fecha, hora,lugar_servicio,cliente,empleado,servicio,estado  FROM agenda";
        foreach ($this->db->query($sql) as $res) {
            $this->agenda[] = $res;
        }
        return $this->agenda;
    }

     /*Método modificar*/
     public function modificarAgenda($codigo,$fecha_m, $hora_m, $lugar_m, $cliente_m, $empleado_m, $servicio_m) {

        self::setNames();
        //Consulta para verificar que el registro no exista
        $validar = "SELECT * FROM agenda WHERE fecha='$fecha_m' and hora='$hora_m'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('La fecha y hora seleccionada ya se encuentra agendada, selecciona otro espacio en la agenda!'); window.location='../views/agenda_m.php';</script>";
        }else{
        //Consulta para actualizar datos
        $sql = "UPDATE agenda SET fecha='$fecha_m', hora='$hora_m', lugar_Servicio='$lugar_m', cliente='$cliente_m', empleado='$empleado_m',servicio='$servicio_m' WHERE codigo='$codigo'";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('cita actualizada correctamente'); window.location='/ProyectoWeb_PSCTG/views/agenda.php' </script>";
        } else {
            echo "<script> alert('error en la actualización');</script>";
        }

        }
        
    }
}