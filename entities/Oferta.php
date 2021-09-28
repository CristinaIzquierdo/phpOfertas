<?php
/** Class that represents a 'Oferta' 
 * @param id unique number to identify the 'Oferta'
 * @param titulo string for title
 * @param descripcion string for description
*/
class Oferta
{
    private $id, $titulo, $descripcion;

    function __construct($id, $titulo, $descripcion)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
