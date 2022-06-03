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
                <?php
include('src/php/fecha-actual.php');
                ?>
           <i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i><a href="src/php/landing.php"><i class="fa-solid fa-house  home" title="Ir a Inicio"></i></a><a href="src/php/logout.php"><i class="fa-solid fa-right-to-bracket logout" title ="Cerrar Sesión"></i></a>
            </div>
        </header>
        <h1 class="titulo-modulos">
            Gestión de Proveedores
        </h1>   
        <fieldset class="form-proveedores"><legend>Formulario Registro Proveedores</legend>
<form action="frm-gest-proveedores.php" class="forms" method="post">
 
<div>
    <label for="name">Nombre o Razón Social</label><span class="required">*</span><br>
    <input type="text" name="Nombre" id="name" placeholder="" class="input-formularios" autofocus required>
</div>
<div>
    <label for="id">Identificación</label><span class="required">*</span><br>
    <input type="text" name="ID" id="id" class="input-formularios" required maxlength="12">
</div>
<div>
    <label for="name">Dirección</label><span class="required">*</span><br>
    <input type="text" name="Direccion" id="name" placeholder="Juan Camilo" class="input-formularios" required>
</div>
<div>
    <label for="city">Ciudad</label><span class="required">*</span><br>
    <select class="select-formularios" name="Ciudad">
        <option value="Villavicencio">Villavicencio</option>
        <option value="Bogotá">Bogotá</option>
        <option value="Arauca">Arauca</option>
        <option value="Armenia">Armenia</option>
        <option value="Barranquilla">Barranquilla</option>
        <option value="Bucaramanga">Bucaramanga</option>
        <option value="Cali">Cali</option>
        <option value="Cartagena">Cartagena</option>
        <option value="Cúcuta">Cúcuta</option>
        <option value="Florencia">Florencia</option>
        <option value="Ibagué">Ibagué</option>
        <option value="Leticia">Leticia</option>
        <option value="Manizales">Manizales</option>
        <option value="Medellín">Medellín</option>
        <option value="Mitú">Mitú</option>
        <option value="Mocoa">Mocoa</option>
        <option value="Montería">Montería</option>
        <option value="Neiva">Neiva</option>
        <option value="Pasto">Pasto</option>
        <option value="Pereira">Pereira</option>
        <option value="Popayán">Popayán</option>
        <option value="Puerto Carreño">Puerto Carreño</option>
        <option value="Puerto Inírida">Puerto Inírida</option>
        <option value="Quibdó">Quibdó</option>
        <option value="Riohacha">Riohacha</option>
        <option value="San Andrés">San Andrés</option>
        <option value="San José del Guaviare">San José del Guaviare</option>
        <option value="Santa Marta">Santa Marta</option>
        <option value="Sincelejo">Sincelejo</option>
        <option value="Tunja">Tunja</option>
        <option value="Valledupar">Valledupar</option>
        
        <option value="Yopal">Yopal</option>
    </select>
</div>
<div>
    <label for="tel">Teléfono</label><br>
    <input type="tel" id="tel" name="Telefono" placeholder="3005958121" class="input-formularios" required>
</div>
<div>
    <label for="e-mail">Correo</label><span class="required">*</span><br>
    <input type="email" id="e-mail" name="Correo"  placeholder="jcquezada@misena.edu.co" class="input-formularios correo" required>
</div>
<div>
    <b>Categoría</b><br>
    <select class="select-formularios" name="categoria-proveedor">
        <?php
        include ('src/php/categorias.php');
        ?>
                   
                   
                  
</select>

</div>
<div class="botones-formulario">
<button class="boton-formulario" type="reset"><i class="fa-solid fa-xmark iconos-formularios borrar" title="Borrar Campos"></i></button>
<button class="boton-formulario" type="submit" name="guardar-proveedor"><i class="fa-solid fa-floppy-disk iconos-formularios guardar" title="Guardar los datos"> </i></button>
</div>
</div>
<?php
include('src/php/proveedores.php');
        ?>
</form>
</fieldset>
<h2 class="titulo-modulos">Búsqueda de Proveedores</h2>
<div class="caja-busqueda">
    <form action="frm-gest-proveedores.php" method="post">
    <b>Buscar por categoría</b>
    <select class="select-formularios" name="id-proveedor-busqueda">
    <?php
        include ('src/php/categorias.php');
        ?>
</select>
    <input type="submit" value="Consultar" class="botones-busqueda proveedor" name="consulta-proveedor">
    <input type="submit" value="Consultar todos" class="botones-busqueda" name="consulta-todos-proveedores">
</form>
</div>

   <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
</body>
</html>