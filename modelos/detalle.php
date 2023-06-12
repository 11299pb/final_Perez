<?php
require_once 'Conexion.php';

class det extends Conexion{
    public $det_id;
    public $det_cita;
    public $det_paciente;
    public $det_medico;
    public $det_situacion;


    public function __construct($args = [] )
    {
        $this->det_id = $args['det_id'] ?? null;
        $this->det_cita = $args['det_cita'] ?? '';
        $this->det_paciente = $args['det_paciente'] ?? '';
        $this->det_medico = $args['det_medico'] ?? '';
        $this->det_situacion = $args['det_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO detalles(det_cita, det_paciente, det_medico) values('$this->det_cita','$this->det_paciente', '$this->det_medico')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT paci_nombre sum(det_cantidad) as cantidad,  * sum (det_cantidad) as total  FROM det_citas inner join productos on det_producto = producto_id where det_situacion = 1 ";

        if($this->det_cita != ''){
            $sql .= " and det_cita = $this->det_cita ";
        }

        $sql .= " group by paci_nombre";


        // echo $sql;
        // exit;

        $resultado = self::servir($sql);
        return $resultado;
    }
}