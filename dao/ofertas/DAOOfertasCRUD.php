<?php
require(__DIR__ . '../../../connection/database.php');
class DAOOfertasCRUD
{

    /**
     * Function that executes a sql query to obtain the 'Ofertas' from the data base.
     * @param mysqli receives the parameters to connect to the database.
     * @return resultado the result of the sql query.
     */
    public function getOfertas($mysqli)
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
     * Function that executes a sql query that ADDS data to the table 'Ofertas'.   
     * @param titulo receives the title of the 'Oferta'
     * @param descripcion receives the descripcion of the 'Oferta'
     * @param mysqli receives the parameters to connect to the database
     */
    public function addOfertas($titulo, $descripcion, $mysqli)
    {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $sql = "INSERT INTO Oferta (titulo, descripcion) VALUES ('$titulo', '$descripcion');";
        $mysqli->query($sql);
    }
}
