<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include './components/head.php';
    ?>
</head>

<body>
    <?php
    include './components/nav.php';
    include './dao/DAOFactory.php';
    include './dao/ofertas/DAOOfertas.php';
    include './dao/ofertas/DAOOfertasRAM.php';
    include './entities/Oferta.php';
    include './components/ofertas.php';
    include './components/footer.php';
    ?>

</body>

</html>