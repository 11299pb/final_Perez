<?php
require_once 'Conexion.php';

class Medico extends Conexion{
    public $med_id;
    public $med_nombre;
    public $med_especialidad;
    public $med_clinica;
    public $med_situacion;


    public function __construct($args = [] )
    {
        $this->med_id = $args['med_id'] ?? null;
        $this->med_nombre = $args['med_nombre'] ?? '';
        $this->med_especialidad = $args['med_especialidad'] ?? '';
        $this->med_clinica = $args['med_clinica'] ?? '';
        $this->med_situacion = $args['med_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO medicos(med_nombre, med_especialidad, med_clinica) values('$this->med_nombre','$this->med_especialidad','$this->med_clinica')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from medicos where med_situacion = 1 ";

        if($this->med_nombre != ''){
            $sql .= " and med_nombre like '%$this->med_nombre%' ";
        }

        if($this->med_especialidad != ''){
            $sql .= " and med_especialidad = $this->med_especialidad ";
        }
        if($this->med_clinica != ''){
            $sql .= " and med_clinica = $this->med_clinica ";
        }

        if($this->med_id != null){
            $sql .= " and med_id = $this->med_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE medicos SET med_nombre = '$this->med_nombre', med_especialidad = $this->med_especialidad, med_clinica = $this->med_clinica where med_id = $this->med_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE medicos SET med_situacion = 0 where med_id = $this->med_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}