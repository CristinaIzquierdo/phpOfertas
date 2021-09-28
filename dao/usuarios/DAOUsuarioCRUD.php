<?php
require(__DIR__ . '../../../connection/database.php');
class DAOUsuarioCRUD
{
    /**
     * @param usuario object to add to the database
     * @param mysqli receives the parameters to connect to the database
     */
    public function add($mysqli, $usuario)
    {
        $hash = password_hash($usuario->getPassword(), PASSWORD_BCRYPT);
        $sql = "INSERT INTO Usuario (
            username, 
            email, 
            password) VALUES (
                '" . $usuario->getUsername() . "',
                '" . $usuario->getEmail() . "',
                '" . $usuario->getPassword() . "'
            );";
        $mysqli->query($sql);
    }
}
