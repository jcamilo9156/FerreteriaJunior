<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Junior</title>
    <link rel="stylesheet" href="src/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="preload" href="../css/estilos.css" as="style">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
  
</head>
<body>

   <header>
   <div class="header-bienvenida">
       <?php
       include('fecha-actual.php');
  ?>





          <a href="opc-usuarios.php"><i class="fa-solid fa-circle-user user" title="Cambios de contraseña"></i></a><a href="logout.php"><i class="fa-solid fa-right-to-bracket logout" title ="Cerrar Sesión"></i></a>
        </div>
    </header>
    
    <h1 class="titulo-landing">Módulo Consulta de Ventas</h1>
    <div class="contenedor-modulo_busqueda-venta">
      <div class="contenedor-busqueda-venta">
        <form action="consultar-ventas.php" method="POST">
        Buscar por vendedor
        <select>
            <?php include('lista-vendedores.php')?>
        </select>
        <input type="submit"name="buscar-venta" value="Buscar">
      </div>
  
    <div class="contenedor-busqueda-venta">
        Buscar por forma de pago
        <select>
            <option>Efectivo</option>
            <option>Crédito</option>
            <option>Tarjeta Crédito</option>
            <option>Tarjeta Débito</option>
        </select>
        <input type="submit"name="buscar-" value="Buscar">
      </div>
      </form>
    </div>
    <?php 

include('buscar-ventas.php');


?>
    </div>
    <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src= "../js/inactividad.js"></script>
</body>
</html>


