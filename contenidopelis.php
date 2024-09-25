<?php
include 'catalogo.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = 'SELECT id, titulo, director, año, genero, duracion, pais, clasificacion FROM catalogo WHERE id = :id';
$sentenciaSQL = $conexion->prepare($query);

$sentenciaSQL->bindParam(':id', $id);
$sentenciaSQL->execute();
$catalogo = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($catalogo);
//echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Contenido Pelis</title>
</head>

<body>
    <?php include 'header.php' ?>

    <main class="container">

        <section class=" border-1">
            <form action="" method="post" enctype="multipart/form-data"
                class="d-flex flex-row gap-2 flex-wrap justify-content-center mt-3">




                <div class="col-3">
                    <img src="img/caballero_oscuro.jpg" alt="" width="300">
                    <h3 class="titulopeli" name="titulo" value="">
                        <?= $catalogo['titulo']  ?>
                    </h3>


                    <p>Director: <?= $catalogo['director'] ?></p>

                    <p>Año: <?= $catalogo['año'] ?></p>

                    <p>Género: <?= $catalogo['genero'] ?></p>

                    <p>Duración: <?= $catalogo['duracion'] ?></p>

                    <p>País: <?= $catalogo['pais'] ?></p>

                    <p>Clasificación: <?= $catalogo['clasificacion'] ?></p>

                    <!--Nueva modificacion de prueba-->
                    <p>Director prueba: <?= $catalogo['director'] ?></p>

                    <p>Año prueba: <?= $catalogo['año'] ?></p>

                    <p>Género prueba: <?= $catalogo['genero'] ?></p>

                    <p>Duración prueba: <?= $catalogo['duracion'] ?></p>

                    <p>País prueba: <?= $catalogo['pais'] ?></p>

                    <p>Clasificación prueba: <?= $catalogo['clasificacion'] ?></p>



                    <a href="inicio.php" name="vercontenido" id="vercontenido" value="">Volver</a>
                </div>



            </form>

        </section>





    </main>
    <?php include 'script.php' ?>
</body>

</html>