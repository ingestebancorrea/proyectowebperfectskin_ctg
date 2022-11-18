<?php
class Cita {//Trabajando con la clase del objeto creeado en la vista
    private $cita;
    private $db;

    /*Crea conexión a DB*/
    public function __construct() {
        $this->contacto = array();
        $this->db = new PDO('mysql:host=localhost:3306;dbname=lauranuñezpsctg_db; charset=utf8mb4', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    /*Método insertar*/
    public function setCita($fecha, $hora, $lugar_servicio) {
        $estado = "Agendada";
        self::setNames();

        //Consulta para verificar que el registro no exista
        $validar = "SELECT * FROM citas WHERE fecha='$fecha' and hora='$hora'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('La fecha y hora seleccionada ya se encuentra agendada, selecciona otro espacio en la agenda!'); window.location='../views/servicios.php';</script>";
        }else{
        //Consulta para insertar datos
        $sql = "INSERT INTO citas(fecha, hora, lugar, estado) VALUES ('" . $fecha . "', '" . $hora . "','" . $lugar_servicio. "','" . $estado. "')";
        $result = $this->db->query($sql);

        if ($result==true) {
            echo "<script> alert('cita agendada correctamente'); window.location='/ProyectoWeb_PSCTG/views/servicios.php' </script>";
        } else {
            echo "<script> alert('error en la insercción de la cita');</script>";
        }

        }
        
    }

    public function getCita($f1,$f2) {

        self::setNames();
        $sql = "SELECT * FROM citas WHERE fecha BETWEEN '$f1' AND '$f2'";
        
        //Consulta para verificar que el registro si exista
        $validando = $this->db->query($sql);
        $resultado = $validando->rowCount();
        if($resultado>=1){
            echo "<script>alert('Citas encontradas')</script>";
            foreach ($this->db->query($sql) as $res) {
                $this->agenda[] = $res;
            }
            return $this->agenda;
        }else{
            echo "<script>alert('No hay registro de citas para el rango de fecha seleccionado')</script>";
        }
    }

     /*Método modificar*/
     public function modificarCita($codigo,$fecha_m, $hora_m, $lugar_m) {

        self::setNames();
        //Consulta para verificar que el registro no exista
        $validar = "SELECT * FROM citas WHERE fecha='$fecha_m' and hora='$hora_m'";
        $validando = $this->db->query($validar);
        $resultado = $validando->rowCount();
        if($resultado == 1){
            echo "<script> alert('La fecha y hora seleccionada ya se encuentra agendada, selecciona otro espacio en la agenda!'); window.location='../views/agenda_m.php';</script>";
        }else{
            //Consulta para actualizar datos
            $sql = "UPDATE citas SET fecha='$fecha_m', hora='$hora_m', lugar='$lugar_m' WHERE cita_codigo='$codigo'";
            $result = $this->db->query($sql);

            if ($result==1) {
                echo "<script> alert('cita actualizada correctamente'); window.location='/ProyectoWeb_PSCTG/views/cita_m.php'; </script>";
            } else {
                echo "<script> alert('error en la actualización, no se encuentra cita agendada para la fecha y hora seleccionada'); window.location='/ProyectoWeb_PSCTG/views/cita_m.php';</script>";
            }
        }
    }
}