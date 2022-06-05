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
            Gestión de Clientes
        </h1>   
        <fieldset><legend>Formulario Registro Clientes</legend>
<form action="frm-gest-clientes.php" class="forms" method="post">

<div>
    <label for="name">Nombres</label><span class="required">*</span><br>
    <input type="text" name="Nombres-Cliente"id="name" placeholder="Juan Camilo" class="input-formularios" autofocus required>
</div>
<div>
    <label for="Apellidos">Apellidos</label><span class="required">*</span><br>
    <input type="text" name="Apellidos-Cliente" id="Apellidos" placeholder="Quezada Barreto" class="input-formularios"required>
</div>
<div>
    <label for="razonsocial">Razón Social</label><br>
    <input type="text" name="razon-social" id="razon-social" placeholder=" " class="input-formularios">
</div>
<div>
    <label for="id">Tipo Identificación</label><span class="required">*</span><br>
    <select class="select-formularios" name="Tipo-Identificacion">
        <option value="Cedula">Cédula Ciudadanía</option>
        <option value="NIT">NIT</option>
        <option value="RUT">RUT</option>
        <option value="Cedula_EXT">Cédula Extranjería</option>
    </select>
</div>

<div>
    <label for="id">Identificación</label><span class="required">*</span><br>
    <input type="text" name="Identificacion" id="id" placeholder="1234567890" class="input-formularios" maxlength="10">
</div>
<div>
    <label for="direccion">Dirección</label><span class="required">*</span><br>
    <input type="text" name="Direccion" id="direccion" placeholder="Carrera 19 # 35-40" class="input-formularios">
</div>
<div>
    <label for="barrio">Barrio</label><br>
    <input type="text" name="Barrio" id="barrio" placeholder="Belén" class="input-formularios">
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
    <input type="tel" name="Telefono" id="tel" placeholder="3005958121" class="input-formularios">
</div>
<div>
    <label for="">Tipo Cliente</label><span class="required">*</span><br>
    <select class="select-formularios" name="tipo">
<?php
// Incluyo archivo para lista de tipocliente
include('src/php/tipo-cliente.php');
?>
    </select>
    </div>
<div>
    <label for="e-mail">Correo</label><span class="required">*</span><br>
    <input type="email" id="e-mail" name="E-mail" placeholder="jcquezada@misena.edu.co" class="input-formularios correo" >
</div>

<div class="botones-formulario">
<button class="boton-formulario" type="reset"><i class="fa-solid fa-xmark iconos-formularios borrar" title="Borrar Campos"></i></button>
<button class="boton-formulario" type="submit" name="guardar-cliente"><i class="fa-solid fa-floppy-disk iconos-formularios guardar" title="Guardar los datos"> </i></button>
<!--<button class="boton-formulario" type="" id="borrar-user"><i class="fa-solid fa-user-xmark iconos-formularios borrar-user" title="Eliminar Usuario
    Cuidado: Al hacer click se eliminará el usuario de la base de datos y tendrá que volverlo a registrar"></i></button>-->
</div>
</form>
</div>
</fieldset>
    </div>
    <div class="avisos">
        <?php
        include('src/php/registrar-clientes.php');
        ?>
        </div>
        <br>
        <h2 class="titulo-modulos">Búsqueda de Clientes</h2>
<div class="caja-busqueda">
    <form action="frm-gest-clientes.php" method="post">
    <b>Digite el número de identificación del cliente</b>
    <input type="text" name="id-client-search" class="input-formularios" maxlength="10">
    <input type="submit" value="Consultar" class="botones-busqueda" name="consulta-clientes">
    <input type="submit" value="Consultar todos" class="botones-busqueda" name="consulta-todos-clientes">
</form>
</div>
<div class='tablas'>
<table>
<tr>
    <th>Id</th>
       <th>Nombres</th>
    <th>Apellidos</th>
    <th>Razón Social</th>
    <th>Tipo Identificación</th>
    <th>Identificación</th>
    <th>Dirección</th>
       <th>Barrio</th>
    <th>Ciudad</th>
    <th>Teléfono</th>
    <th>Tipo Cliente</th>
    <th>Correo</th>
    <th>Acción</th>
    </tr>
    </form>
  

<?php
include('src/php/buscar-clientes.php');

?>

</table>
</div>
    
  


    
   <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
</body>
</html>


   <footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
</body>
</html>