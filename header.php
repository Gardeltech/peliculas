<?php
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/peliculas';


$url = 'http://' . $_SERVER['HTTP_HOST'] . '/peliculas';

?>



<header>
    <nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-between mx-2">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="<?= $url . "/login.php" ?>" aria-current="page">
                <h3>MejoresPelis</h3>
                <span class="visually-hidden"></span>
            </a>

        </div>
        <div class="nav navbar-nav">
            <a class="nav-item nav-link bg-secondary rounded" href="<?= $url . "/login.php" ?>">Iniciar sesión</a>
        </div>
    </nav>
</header>