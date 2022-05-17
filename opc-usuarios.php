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
    <h1 class="titulo-modulos"> Módulo Actualización Contraseña</h1>
    <div class="form-cambio-password">
    <form action="src/php/cambio-password.php" method="post">
<label for="user">Usuario</label>
<input type="text" readonly class="input-formularios" name="userid" id="user" placeholder="1121880528">
<label for="passactual">Digitar Contraseña Actual<span class="required">*</span></label>
<input type="password"  maxlenght ="10" class="input-formularios" name="passactual" id="passactual">
<label for="password1">Digitar Contraseña<span class="required">*</span></label>
<input type="password"  maxlength ="10" class="input-formularios" name="password1" id="password1">
<label for="password2">Confirmar Contraseña<span class="required">*</span></label>
<input type="password" maxlength="10"  class="input-formularios" name="password2" id="password2" >
<button type="submit" value="Guardar">Guardar</button>
</form>
</div>
</div>
<div class="error">
    <span>
        <?php
        include('src/php/cambio-password.php');
        ?>
    </span>




    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>  
</body>
</html>