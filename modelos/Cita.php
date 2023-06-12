<?php
require_once 'Conexion.php';

class Cita extends Conexion{
    public $cit_id;
    public $cit_paciente;
    public $cit_medico;
    public $cit_fecha;
    public $cit_hora;
    public $cit_referencia;
    public $cit_situacion;


    public function __construct($args = [] )
    {
        $this->cit_id = $args['cit_id'] ?? null;
        $this->cit_paciente = $args['cit_paciente'] ?? '';
        $this->cit_medico = $args['cit_medico'] ?? '';
        $this->cit_fecha = $args['cit_fecha'] ?? '';
        $this->cit_hora = $args['cit_hora'] ?? '';
        $this->cit_referencia= $args['cit_referencia'] ?? '';
        $this->cit_situacion = $args['cit_situacion'] ?? '';
    }

        public function setcitFecha($fecha) {
            $sql = "SELECT * FROM citas where $this->cit_fecha = $fecha";
        }
    
        // Resto de métodos de la clase Cita...
    public function buscarPorFecha()
        {
            $sql = "SELECT * FROM citas WHERE DATE(cit_fecha) = '$this->cit_fecha' AND cit_situacion = 1";
            $resultado = self::servir($sql);
            return $resultado;
        }    
    public function guardar(){
        $sql = "INSERT INTO citas(cit_paciente, cit_medico, cit_fecha, cit_hora, cit_referencia) values('$this->cit_paciente','$this->cit_medico','$this->cit_fecha','$this->cit_hora','$this->cit_referencia')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from citas where cit_situacion = 1 ";

        if($this->cita_paciente != ''){
            $sql .= " and cit_paciente like '%$this->cit_paciente%' ";
        }

        if($this->cit_medico != ''){
            $sql .= " and cit_medico = $this->cit_medico ";
        }

        if($this->cit_id != null){
            $sql .= " and cit_id = $this->cit_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE citas SET cit_paciente = '$this->cit_paciente', cit_medico = $this->cit_medico, cit_fecha = $this->cit_fecha, cit_hora = $this->cit_hora, cit_referencia = $this->cit_referencia where cit_id = $this->cit_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE citas SET cit_situacion = 0 where cit_id = $this->cit_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function busqueda(){
        

        $sql = " SELECT * FROM citas  inner join pacientes on paci_id = cit_paciente 
        inner join medicos on med_id = cit_med inner join clinicas on clin_id = med_clinica ";


        $resultado = self::servir($sql);
        return $resultado;

    }
}