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
<div class="main-container">
        <header>
            <div class="header-bienvenida">
        
          <a href="src/php/opc-usuarios.php"><i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i></a><a href="src/php/landing.php"><i class="fa-solid fa-house user" title="Ir a inicio"></i></a><a href="src/php/logout.php"><i class="fa-solid fa-right-to-bracket logout"title ="Cerrar Sesión"></i></a>

            </div>
        </header>
        <h1 class="titulo-modulos">
        Modificar Usuarios
        </h1>   
<?php
include ('conexion.php');
$usuario = $_GET['Usuario'];
$query = "SELECT * FROM usuarios WHERE Usuario = $usuario";
$ejecucion = mysqli_query($conexion, $query);
while ($arreglo = mysqli_fetch_array($ejecucion)){?>

<form action="" class="">
      
    
    
    
    
    </form><?php
 
}

?>
</div>
<footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src="src/js/funcion-borrar.js"></script>
</body>
</html>