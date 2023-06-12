<?php
require_once 'Conexion.php';

class Paciente extends Conexion{
    public $paci_id;
    public $paci_nombre;
    public $paci_dpi;
    public $paci_telefono;
    public $paci_situacion;


    public function __construct($args = [] )
    {
        $this->paci_id = $args['paci_id'] ?? null;
        $this->paci_nombre = $args['paci_nombre'] ?? '';
        $this->paci_dpi = $args['paci_dpi'] ?? '';
        $this->paci_telefono = $args['paci_telefono'] ?? '';
        $this->paci_situacion = $args['paci_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO pacientes(paci_nombre, paci_dpi, paci_telefono) values('$this->paci_nombre','$this->paci_dpi','$this->paci_telefono')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from pacientes where paci_situacion = 1 ";

        if($this->paci_nombre != ''){
            $sql .= " and paci_nombre like '%$this->paci_nombre%' ";
        }

        if($this->paci_dpi != ''){
            $sql .= " and paci_dpi = $this->paci_dpi ";
        }
        if($this->paci_telefono != ''){
            $sql .= " and paci_telefono = $this->paci_telefono ";
        }

        if($this->paci_id != null){
            $sql .= " and paci_id = $this->paci_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE pacientes SET paci_nombre = '$this->paci_nombre', paci_dpi = $this->paci_dpi , paci_telefono = $this->paci_telefono where paci_id = $this->paci_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE pacientes SET paci_situacion = 0 where paci_id = $this->paci_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}