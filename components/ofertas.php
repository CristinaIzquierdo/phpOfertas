<div class="ofertas">
    <?php

    $daoOfertas = DAOFactory::getInstance()->getDAOOfertas();

    $ofertas = $daoOfertas->getOfertas($mysqli);

    foreach ($ofertas as $currentOferta) {
        echo "<li>";
        echo $currentOferta->getnombre() . "<br><label>" . $currentOferta->getdescripcion() . "<label>";
        echo "</li>";
    }

    ?>
</div>