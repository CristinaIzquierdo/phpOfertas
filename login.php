<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <form class="formRegister" action="./login.php" method="POST">
            <label>Regístrate</label>
            <input type="text" name="email" placeholder="Introduce tu email" id="email" required />
            <input type="text" name="username" placeholder="Introduce tu nombre de usuario" id="username" required />
            <input type="text" name="password" placeholder="Introduce tu contraseña" id="password" required />
            <p>
                <input type="submit" value="ENTRAR" id="enviar" />
                <?php
                include './dao/DAOFactory.php';

                include './dao/usuarios/DAOUsuarioCRUD.php';
                include './dao/usuarios/DAOUsuarios.php';
                include './entities/Usuario.php';
                $daoUsuario = DAOFactory::getInstance()->getDAOusuarios();

                if (isset($_POST['email'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $usuario = new Usuario(null, $username, $email, $password);
                    $daoUsuario->add($mysqli, $usuario);
                    echo $usuario->getUsername();
                }
                ?>

            </p>
        </form>
    </section>
</body>

</html>