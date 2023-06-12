<?php
require_once 'Conexion.php';

class Especialidad extends Conexion{
    public $esp_id;
    public $esp_nombre;
    public $esp_situacion;

    public function __construct($args = [] )
    {
        $this->esp_id = $args['esp_id'] ?? null;
        $this->esp_nombre = $args['esp_nombre'] ?? '';
        $this->esp_situacion = $args['esp_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO especialidad(esp_nombre) values('$this->esp_nombre')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from especialidad where esp_situacion = 1 ";

        if($this->esp_nombre != ''){
            $sql .= " and esp_nombre like '%$this->esp_nombre%' ";
        }

        if($this->esp_id != null){
            $sql .= " and esp_id = $this->esp_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE especialidad SET esp_nombre = '$this->esp_nombre' where esp_id = $this->esp_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE especialidad SET esp_situacion = 0 where esp_id = $this->esp_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}