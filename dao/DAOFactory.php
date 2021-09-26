<?php

class DAOFactory
{

    private static $daoFactory;
    private $daoOfertas;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset($daoFactory)) {
            $daoFactory = new DAOFactory();
        }
        return $daoFactory;
    }

    public function getDAOOfertas()
    {
        if (!isset($daoOfertas)) {
            $daoOfertas = new DAOOfertasCRUD();
        }
        return $daoOfertas;
    }
}
