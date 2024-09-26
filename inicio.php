<?php
include 'catalogo.php';



$query = 'SELECT titulo, id FROM catalogo';


$sentenciaSQL = $conexion->prepare($query);
$sentenciaSQL->execute();
$catalogo = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($catalogo);
//echo '</pre>';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio</title>
</head>


<body>
    <?php include 'header.php' ?>
    <main class="container  ">
        <section class=" border-1">
            <form action="" method="post" enctype="multipart/form-data"
                class="d-flex flex-row gap-2 flex-wrap justify-content-center mt-3">
                <?php foreach ($catalogo as  $pelicula) :


                ?>
                <div class="col-3">
                    <img src="img/amelie.jpg" alt="" width="300">
                    <h3 class="titulopeli" name="titulo" value="titulo" id="titulo"><?= $pelicula['titulo'];  ?></h3>
                    <a href="contenidopelis.php?id=<?= $pelicula['id'];  ?>" name="titulo" id="titulo" value="titulo">
                        Ver
                        contenido</a>
                </div>

                <?php endforeach; ?>

            </form>

            <p>Un cambio en inicio peliculas</p>

        </section>




    </main>
    <?php include 'script.php' ?>
</body>

</html>