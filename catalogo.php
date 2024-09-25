<?php
include 'basedatos.php';

if (isset($_POST['btnFormulario'])) {

    $accion = $_POST['btnFormulario'];

    $id = (isset($_POST['id'])) ? $_POST['id'] : '';
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
    $director = (isset($_POST['director'])) ? $_POST['director'] : '';
    $año = (isset($_POST['año'])) ? $_POST['año'] : '';
    $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
    $duracion = (isset($_POST['duracion']) ? $_POST['duracion'] : '');
    $pais = (isset($_POST['pais'])) ? $_POST['pais'] : '';
    $clasificacion = (isset($_POST['clasificacion'])) ? $_POST['clasificacion'] : '';
    $imgPeli = (isset($_POST['imgPeli'])) ? $_POST['imgPeli'] : '';
}