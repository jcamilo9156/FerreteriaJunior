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
    
    <h1 class="titulo-landing">¿Qué deseas hacer?</h1>

    <div class="main-container">
        <div class="contenedor-opciones">
                <div>
            
                  <a href="../../frm-reg-usuarios.php">  <span class="material-icons-outlined iconos-opciones">groups</span></a><p>Gestionar Usuarios</p>
                
                </div>
        <div>
            <a href="../../frm-gest-clientes.php"><span class="material-icons iconos-opciones"> people</span></a><p>Gestionar Clientes</p>
        </div>
        <div>
            <a href="../../frm-gest-inventario.php"><span class="material-icons-outlined iconos-opciones"> inventory</span></a><p>Gestionar Inventario</p>
        </div>
        <div>
        <a href="consultar-ventas.php"><span class="material-icons-outlined iconos-opciones">
query_stats
</span></a><p>Consultar ventas</p>
        </div>
        <div class="ultima">
            <a href="../../frm-gest-proveedores.php"><span class="material-icons iconos-opciones"> person_search</span></a><p>Gestionar Proveedores</p>
        </div>
    </div>
        </div>
    <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src= "../js/inactividad.js"></script>
</body>
</html>


