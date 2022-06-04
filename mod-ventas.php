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
    <link href="src/css/estilos.css" rel="stylesheet" type="text/css">
  
</head>
<body>
    <div class="main-container">
        <header>
                <div class="header-bienvenida">
                    <?PHP
    include('src/php/fecha-actual.php');
                    ?>
                    <i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i><a href="src/php/landing.php"><i class="fa-solid fa-house  home" title="Ir a Inicio"></i></a><a href="src/php/logout.php"><i class="fa-solid fa-right-to-bracket logout" title ="Cerrar Sesión"></i></a>
                </div>
        </header>
        <h1 class="titulo-modulos">
            Módulo de Ventas
        </h1>   
        <div class="contenedor-busqueda">
         
            <label for=""><center><p>Búsqueda de Producto</p></center></label>
        <input type="text" class="input-formularios input-ventas" placeholder="Nombre Producto"><br>
      
    <center><p>Filtrar por Categoría:</p></center>
    <select class="select-formularios">
        <?php
include ('src/php/categorias.php');

?>
</select>
<input type="submit" name="busqueda-producto-modulo-ventas" value="Buscar" class="boton-busqueda-ventas">
</div>
<div class="caja-productos-main">
<div class="caja-producto">
<div class="caja-imagen">
    <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
</div>
<h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
<div class="contenido">
<p>Estado</p><p class="estado-producto"> Disponible</p>
</div>
<div class="contenido">
<p>Cantidad a facturar</p><input class="input-cant-venta" type="text" name"cantidad">
</div>
<input type="submit" name="busqueda-producto-modulo-ventas" value="Añadir al  carrito" class="boton-añadir-carrito">
</div>

<div class="caja-producto">
    <div class="caja-imagen">
        <img src="src/img/4016.jpg" alt="imagen-cemento">
    </div>
    <h3 class="Titulo-producto">Cemento Blanco Marca Cemex x50 kg</h3>
    <div class="contenido">
        <p>Estado</p><p class="estado-producto"> Disponible</p>
        </div>
        <div class="contenido">
        <p>Cantidad a facturar</p><input class="input-cant-venta" type="text" name"cantidad">
        </div>
        <input type="submit" name="busqueda-producto-modulo-ventas" value="Añadir al  carrito" class="boton-añadir-carrito">
</div>
<div class="caja-producto">
    <div class="caja-imagen">
        <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
    </div>
    <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
    <div class="contenido">
        <p>Estado</p><p class="estado-producto"> Disponible</p>
        </div>
        <div class="contenido">
        <p>Cantidad a facturar</p><input class="input-cant-venta" type="text" name"cantidad">
        </div>
        <input type="submit" name="busqueda-producto-modulo-ventas" value="Añadir al  carrito" class="boton-añadir-carrito">
</div>
<div class="caja-producto">
    <div class="caja-imagen">
        <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
    </div>
    <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
    </div>
    
    <div class="caja-producto">
        <div class="caja-imagen">
            <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
        </div>
        <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
    </div>
    <div class="caja-producto">
        <div class="caja-imagen">
            <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
        </div>
        <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
    </div>
    <div class="caja-producto">
        <div class="caja-imagen">
            <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
        </div>
        <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
        </div>
        
        <div class="caja-producto">
            <div class="caja-imagen">
                <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
            </div>
            <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
        </div>
        <div class="caja-producto">
            <div class="caja-imagen">
                <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
            </div>
            <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
        </div>
        <div class="caja-producto">
            <div class="caja-imagen">
                <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
            </div>
            <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
            </div>
            
            <div class="caja-producto">
                <div class="caja-imagen">
                    <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
                </div>
                <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
            </div>
            <div class="caja-producto">
                <div class="caja-imagen">
                    <img src="src/img/C.-Gris-UG-50-kg-Producto.png" alt="imagen-cemento">
                </div>
                <h3 class="Titulo-producto">Cemento Gris Marca Argos x50 kg</h3>
            </div>
</div>
    


      

   <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
</body>
</html>