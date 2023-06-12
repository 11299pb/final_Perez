<?php
require_once 'Conexion.php';

class Clinica extends Conexion{
    public $clin_id;
    public $clin_nombre;
    public $clin_situacion;

    public function __construct($args = [] )
    {
        $this->clin_id = $args['clin_id'] ?? null;
        $this->clin_nombre = $args['clin_nombre'] ?? '';
        $this->clin_situacion = $args['clin_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO clinicas(clin_nombre) values('$this->clin_nombre')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from clinicas where clin_situacion = 1 ";

        if($this->clin_nombre != ''){
            $sql .= " and clin_nombre like '%$this->clin_nombre%' ";
        }

        if($this->clin_id != null){
            $sql .= " and clin_id = $this->clin_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE clinicas SET clin_nombre = '$this->clin_nombre' where clin_id = $this->clin_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE clinicas SET clin_situacion = 0 where clin_id = $this->clin_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}