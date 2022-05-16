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
    <link rel="preload" href="src/css/estilos.css" as="style">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
  
</head>
<body>
<?php
include('validar-login.php');
?>
   <header>
        <div class="header-bienvenida">
          <?php 
            include('mensaje-bienvenida.php');
          ?>
          <i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i><a href="logout.php"><i class="fa-solid fa-right-to-bracket user"title ="Cerrar Sesión"></i></a>
        </div>
    </header>
    
    <h1 class="titulo-landing">¿Qué deseas hacer?</h1>

    <div class="main-container">
        <div class="contenedor-opciones">
                <div>
            
                  <a href="frm-reg-usuarios.html">  <span class="material-icons-outlined iconos-opciones">groups</span></a><p>Gestionar Usuarios</p>
                
                </div>
        <div>
            <a href="frm-gest-clientes.html"><span class="material-icons iconos-opciones"> people</span></a><p>Gestionar Clientes</p>
        </div>
        <div>
            <a href="frm-gest-inventario.html"><span class="material-icons-outlined iconos-opciones"> inventory</span></a><p>Gestionar Inventario</p>
        </div>
        <div>
            <a href="index.html"><span class="material-icons-outlined iconos-opciones">point_of_sale</span></a> <p>Módulo de Ventas</p>
        </div>
        <div class="ultima">
            <a href="frm-gest-proveedores.html"><span class="material-icons iconos-opciones"> person_search</span></a><p>Gestionar Proveedores</p>
        </div>
    </div>
        </div>
    <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src= "src/js/menu-usuario.js"></script>
</body>
</html>


