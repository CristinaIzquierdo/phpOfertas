<section>
    <form class="formOferta" action="index.php" method="POST">
        <label>Nueva oferta</label>
        <input type="text" name="titulo" placeholder="Título de la oferta" id="titulo" required />
        <input type="text" name="descripcion" placeholder="Descripción de la oferta" id="descripcion" required />
        <p><input type="submit" value="ENVIAR" id="enviar" />
            <?php
            $daoOfertas = DAOFactory::getInstance()->getDAOOfertas();

            if (isset($_POST['titulo'])) {
                $titulo = $_POST['titulo'];
                $descripcion = $_POST['descripcion'];
                $daoOfertas->add($titulo, $descripcion, $mysqli);
                header('location: ' . 'http://gaboo.servehttp.com/cristina/phpOfertas/index.php');
            }
            ?>
        </p>
    </form>
</section>