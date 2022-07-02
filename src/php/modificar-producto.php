<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Junior</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="preload" href="../css/estilos.css" as="style">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
  
</head>

<body>
    <div class="main-container">
        <header>
            <div class="header-bienvenida">
            <?PHP
include('fecha-actual.php');
                ?>
                <i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i><a href="landing.php"><i class="fa-solid fa-house  home" title="Ir a Inicio"></i></a><a href="logout.php"><i class="fa-solid fa-right-to-bracket logout" title ="Cerrar Sesión"></i></a>
            </div>
        </header>
        <?php

include ('conexion.php');
$id_producto = $_GET['Id_producto'];

$query = "SELECT * FROM productos WHERE Id_producto = '$id_producto'";
$ejecucion = mysqli_query($conexion, $query);
$arreglo =mysqli_fetch_array($ejecucion);
include('cerrar-conexion.php');


?>
        <h1 class="titulo-modulos">
          Modificación de productos
        </h1>   
        <fieldset class="field-inv"><legend>Formulario Modificación Productos</legend>
<form action="actualizar-productos.php" class="forms" method="POST">
 <input type="hidden" value="<?php echo $arreglo['Id_producto'];?>" name="Id_producto"> 
<div>
    <label for="name">Nombre Producto</label><span class="required">*</span><br>
    <input type="text" name="nombre-producto" id="name" value="<?php echo $arreglo['Nombre'];?>" class="input-formularios" autofocus>
</div>
<div>
    <label for="proveedor">Proveedor</label><span class="required">*</span><br>
    <select name="proveedor" id="" class="select-formularios">
        <?php 
    include ('lista-proveedores.php');
        ?>
    
    </select>
</div>
<div>
    <label for="Cantidad">Cantidad Actual</label><span class="required">*</span><br>
    <input type="number" readonly value="<?php echo $arreglo['Stock'];?>"  name="cantidad" class="input-formularios"  id="Cantidad">
</div>
<div>
    <label for="Cantidad">Cantidad a Ingresar</label><span class="required">*</span><br>
    <input type="number" name="cantidad_ingresa" class="input-formularios"  id="Cantidad" required>
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
    <select name="categoria-producto" id="" class="select-formularios" >
        <?php
include('categorias.php');
        ?>
    </select>
</div>
<div>
    <label for="precio">Precio Venta</label><span class="required">*</span><br>
    <input type="text" name="precio-venta" id="precio" value="<?php echo $arreglo['Precio'];?>" class="input-formularios" required>
</div>
<div>
    <label for="precio">Precio Día Alquiler</label><br>
    <input type="text" name="precio-alquiler" id="precio" value="<?php echo $arreglo['Precio_Dia_Alquiler'];?>" class="input-formularios" required>
</div>

<div>
    <label for="observ">Observaciones</label><br>
    <textarea name="observaciones" id="observ" cols="30" rows="3" class="campo-text" ></textarea>
</div>

<div class="botones-formulario inventario">
<button class="boton-formulario" type="reset"><i class="fa-solid fa-xmark iconos-formularios borrar" title="Borrar Campos"></i></button>
<button class="boton-formulario" type="submit" name="guardar-producto"><i class="fa-solid fa-floppy-disk iconos-formularios guardar" title="Guardar los datos"> </i></button>
</div>
</form>
</fieldset>
    </div>
       <?php
       include('gestion-inventario.php');
       ?> 
   </form>
     </fieldset>
         </div>
         <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
</body>
</html>


