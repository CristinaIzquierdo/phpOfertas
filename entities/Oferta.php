<?php 

class Oferta {
    private $id, $nombre, $descripcion;

    function __construct($id, $nombre, $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getId(){
        return $this->id;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }
}