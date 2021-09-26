<div class="ofertas">
    <h1>Nueva oferta</h1>

    <form action="index.php" method="POST">
        <input type="text" name="titulo" placeholder="titulo" id="titulo" required/>
        <input type="text" name="descripcion" placeholder="descripcion" id="descripcion" required/>
        <p><input type="submit" value="ENVIAR" class="footer"/>
            <?php
            $daoOfertas = DAOFactory::getInstance()->getDAOOfertas();

            if (isset($_POST['titulo'])) {
                $titulo = $_POST['titulo'];
                $descripcion = $_POST['descripcion'];
                $daoOfertas->addOfertas($titulo, $descripcion, $mysqli);
                header('location: ' . 'http://gaboo.servehttp.com/cristina/phpOfertas/index.php');
            }
            ?>
        </p>
    </form>

</div>