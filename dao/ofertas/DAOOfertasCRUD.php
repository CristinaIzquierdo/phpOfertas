<?php
require(__DIR__ . '../../../connection/database.php');
class DAOOfertasCRUD
{

    /**
     * @param mysqli receives the parameters to connect to the database.
     * @return resultado the result of the sql query.
     */
    public function getAll($mysqli)
    {
        $sql = 'SELECT * FROM Oferta';
        $resultado = $mysqli->query($sql);
        $ofertas = array();

        while ($row = $resultado->fetch_assoc()) {
            $oferta = new Oferta(null, $row["titulo"], $row["descripcion"]);
            array_push($ofertas, $oferta);
        }
        return $ofertas;
    }

    /**
     * @param oferta object to add to the database
     * @param mysqli receives the parameters to connect to the database
     */
    public function add($mysqli, $oferta)
    {
        $sql = "INSERT INTO Oferta (
            titulo, 
            descripcion) VALUES (
                '" . $oferta->getTitulo() . "',
                '" . $oferta->getDescripcion() . "'
            );";
        $mysqli->query($sql);
    }
}
