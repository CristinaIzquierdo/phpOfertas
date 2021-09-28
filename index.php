<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include './components/head.php';
    ?>
</head>

<body>
    <?php
    include './common/urls.php';
    include './dao/DAOFactory.php';
    include './dao/ofertas/DAOOfertas.php';
    include './dao/ofertas/DAOOfertasCRUD.php';
    
    include './entities/Oferta.php';
    
    if (!isset($_SESSION['user'])) {
        header('location: ' . $url . '/login.php');
    }
    ?>
    <?php
    include './components/nav.php';
    ?>

    <main class="panel">
        <?php
        include './components/allOfertas.php';
        include './components/ofertas.php';
        ?>
    </main>

    <?php
    include './components/footer.php';
    ?>

</body>

</html>