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
        
          <a href="opc-usuarios.php"><i class="fa-solid fa-circle-user user" title="Opciones de usuario"></i></a><a href="landing.php"><i class="fa-solid fa-house user" title="Ir a inicio"></i></a><a href="logout.php"><i class="fa-solid fa-right-to-bracket logout"title ="Cerrar Sesión"></i></a>

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
<div class="contenedor-formulario">
    <fieldset><legend>Formulario Modificación Usuarios</legend>
        <form action="actualizar-usuarios.php" class="forms" method="post">
           
            <div>
            <label for="user">Usuario</label><span class="required">*</span><br>
            <input type="text" name="user" id="user" value="<?php echo $arreglo['Usuario'];?>"  class="input-formularios" autofocus maxlength="10">
        </div>
        <div>
            <label for="password">Clave:</label><span class="required">*</span><br>
            <input type="password" name="password" id="password" value="<?php echo $arreglo['Clave'];?>"  class="input-formularios" maxlength="10" disabled>
        </div>
        <div class="campo-form">
            <label for="">Tipo de Usuario</label><span class="required">*</span></p>
            <select class="select-formularios" name="cargo" >
            <option value=""></option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor"> Vendedor</option>
                <option value="Almacenista">Almacenista</option>
             </select> 
        </div>
        <div>
            <label for="name">Nombres</label><span class="required">*</span><br>
            <input type="text" name="nombres" id="name" value="<?php echo $arreglo['Nombres'];?>"  class="input-formularios" disabled>
        </div>
        <div>
            <label for="Apellidos">Apellidos</label><span class="required">*</span><br>
            <input type="text" name="apellidos" id="Apellidos" value="<?php echo $arreglo['Apellidos'];?>" class="input-formularios"disabled>
        </div>
        <div>
            <label for="id">Identificación</label><span class="required">*</span><br>
            <input type="text" name="id" id="id" value="<?php echo $arreglo['Identificacion'];?>" class="input-formularios" maxlength="10" disabled>
        </div>
        <div>
            <label for="direccion">Dirección</label><span class="required">*</span><br>
            <input type="text" name="direccion" id="direccion" value="<?php echo $arreglo['Direccion'];?>" class="input-formularios" required>
        </div>
        <div>
            <label for="barrio">Barrio</label><br>
            <input type="text" name="barrio" id="barrio" value="<?php echo $arreglo['Barrio'];?>" class="input-formularios">
        </div>
        <div>
            <label for="city">Ciudad</label><span class="required">*</span><br>
            <select class="select-formularios" name="ciudad">
            <option value=""></option>
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
            <input type="tel" name="tel" id="tel" value="<?php echo $arreglo['Telefono'];?>"  class="input-formularios" required>
        </div>
        <div>
            <label for="e-mail">Correo</label><span class="required">*</span><br>
            <input type="email" name="e-mail" id="e-mail" value="<?php echo $arreglo['Correo'];?>"  class="input-formularios correo" required>
        </div>
        <div class="botones-formulario">
        <button class="boton-formulario" type="reset"><i class="fa-solid fa-xmark iconos-formularios borrar" title="Borrar Campos"></i></button>
        <button class="boton-formulario" type="submit" name="guardar-usuario"><i class="fa-solid fa-floppy-disk iconos-formularios guardar" title="Guardar los datos"> </i></button>
        
        </div>
        </form>
        </fieldset>
            </div>
        </div>
       
   
    
    
    <?php
    }

    ?>
</div>

</div>
<footer class="footer-forms">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src="src/js/funcion-borrar.js"></script>
</body>
</html>