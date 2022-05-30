<?php

if((isset($_POST['consulta-todos-clientes']))){
    //$id_user = $_POST['id-client-search'];
    include('src/php/conexion.php');

$resultados = mysqli_query($conexion, "SELECT * FROM clientes");
include('src/php/cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados))