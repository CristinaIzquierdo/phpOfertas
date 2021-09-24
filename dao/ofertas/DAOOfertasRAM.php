<?php
require(__DIR__ . '../../../connection/database.php');
class DAOOfertasRAM
{
    public function getOfertas($mysqli)
    {
        $sql = 'select * from recetas';
        $resultado = $mysqli->query($sql);
        return $resultado;
        // new Oferta(1, "Programador/a backend", "Trabajo con PHP y node.js"),
        // new Oferta(2, "Programador/a frontend", "Trabajo JavaScript")
    }
}
