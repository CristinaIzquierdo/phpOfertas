<section>
    <ul class="ofertas">
        <?php

        $daoOfertas = DAOFactory::getInstance()->getDAOOfertas();

        $ofertas = $daoOfertas->getAll($mysqli);

        foreach ($ofertas as $oferta) {
            echo
            '<li>
            <p>' . $oferta->getTitulo() . '</p>
            <label for="">' . $oferta->getDescripcion() .
                '</label>
        </li>';
        }

        ?>
    </ul>
</section>