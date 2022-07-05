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
                <a href="src/php/landing.php"><i class="fa-solid fa-house  home" title="Ir a Inicio"></i></a><a href="src/php/logout.php"><i class="fa-solid fa-right-to-bracket logout" title ="Cerrar Sesión"></i></a>
            </div>
        </header>
        <h1 class="titulo-modulos">
            Gestión de Inventario
        </h1>   
        <fieldset class="field-inv"><legend>Formulario Registro Productos</legend>
<form action="frm-gest-inventario.php" class="forms" method="POST" enctype="multipart/form-data">
 
<div>
    <label for="name">Nombre Producto</label><span class="required">*</span><br>
    <input type="text" name="nombre-producto" id="name" class="input-formularios" autofocus>
</div>
<div>
    <label for="proveedor">Proveedor</label><span class="required">*</span><br>
    <select name="proveedor" id="" class="select-formularios">
        <?php 
    include ('src/php/lista-proveedores.php');
        ?>
    
    </select>
</div>
<div>
    <label for="Cantidad">Cantidad a Ingresar</label><span class="required">*</span><br>
    <input type="number" name="cantidad" class="input-formularios" required id="Cantidad">
</div>
<div>
    <label for="date">Fecha de Ingreso</label><br>
    <input type="date" name="fecha-ingreso" id="date" class="input-formularios date">
</div>
<div>
    <label for="Ubicación">Ubicación</label><span class="required">*</span><br>
    <select class="select-formularios" name="ubicacion">
        <option value="Bodega 1"> Bodega 1</option>
        <option value="Bodega 2"> Bodega 2</option>
    </select>
</div>
<div>
    <label for="categoria">Categoría Producto</label><br>
    <select name="categoria-producto" id="" class="select-formularios">
        <?php
include('src/php/categorias.php');
        ?>
    </select>
</div>
<div>
    <label for="precio">Precio Venta</label><span class="required">*</span><br>
    <input type="text" name="precio-venta" id="precio" placeholder="" class="input-formularios" required>
</div>
<div>
    <label for="precio">Precio Día Alquiler</label><br>
    <input type="text" name="precio-alquiler" id="precio" placeholder="" class="input-formularios" required>
</div>

<div>
    <label for="observ">Observaciones</label><br>
    <textarea name="observaciones" id="observ" cols="30" rows="3" class="campo-text"></textarea>
</div>
<div class="subir-imagen">
    <label for="imagen">Subir Imagen</label><br>
    <input type="file" name="foto-producto" id="precio" class="subir-imagen-input">
</div>
<div class="botones-formulario inventario">
<button class="boton-formulario" type="reset"><i class="fa-solid fa-xmark iconos-formularios borrar" title="Borrar Campos"></i></button>
<button class="boton-formulario" type="submit" name="guardar-producto"><i class="fa-solid fa-floppy-disk iconos-formularios guardar" title="Guardar los datos"> </i></button>
</div>
</form>
</fieldset>
    </div>
       <?php
       include('src/php/gestion-inventario.php');
       ?> 
   </form>
     </fieldset>
         </div>
         <br>
        <h2 class="titulo-modulos">Búsqueda de Productos</h2>
<div class="caja-busqueda">
<div class="caja-busqueda">
    <form action="" method="POST">
    <b>Buscar por categoría</b>
    <select class="select-formularios" name="cat_producto">
    <?php
        include ('src/php/categorias.php');
        ?>
</select>
    <input type="submit" value="Consultar" class="botones-busqueda" name="consulta-producto">
    <input type="submit" value="Consultar todos" class="botones-busqueda" name="consulta-todos-productos">
    <a href="src/php/reporte-inventario.php" class="generar-pdf"><i class="fa-solid fa-file-pdf icono-pdf"></i>Generar PDF</a>
</form>
</div>
         <div class="tablas">

<?php
include('src/php/buscar-producto.php');
?>
</div>
</table>

   <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src="src/js/funcion-borrar.js"></script>
</body>
</html>