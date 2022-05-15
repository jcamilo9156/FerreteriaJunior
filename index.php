<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Junior</title>
    <link rel="stylesheet" href="src/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preload" href="src/css/estilos.css" as="style">
  
    <link rel="stylesheet" href="src/css/estilos.css"  type="text/css">
  
</head>
<body class="login-index"> 
    <div class="titulo-login"><h1>Sistema Gestión Ventas e Inventario <br>Ferretería Junior</h1>
    </div>
    
    <form action="src/php/landing.php" method="post">
    <div class="form-login">    
        <h2>Iniciar Sesión</h2> 
    <div class="input-container">
            <i class="fa-solid fa-user"></i> <input maxlength="10" minlength="6" type="text" name="usuario" placeholder="Digita el usuario" autofocus title="El usuario es el número de identificación"  ><!--<span class="required" title="Dato Obligatorio">*</span>-->
         </div>  
         <div class="input-container">
          <i class="fa-solid fa-key"></i> <input minlenght="10"maxlength="10" type="password" name="password" placeholder="Digita la contraseña" pattern="[a-zA-Z0-9]{6,15}"title="Recuerda que la contraseña es de máximo 10 dígitos y fue asignada en el momento del registro por el Administrador, puedes cambiarla en el menú de usuario teniendo en cuenta las siguientes recomendaciones:
          * Máximo y Mínimo 10 dígitos
          * Debe contener una Mayúscula
          * Debe contener al menos un número y un carácter especial ej: *-+. " >
        </div>
        <button type="submit" class="boton-login" name="boton_login"> Iniciar Sesión </button>
        <div class="error">
      <span>
            <?php
            session_start();
            ob_start();
            if ( @$_SESSION ['sesion_exitoso']==2)
             {
           echo "Los campos son obligatorios";
            }
            if ( @$_SESSION ['sesion_exitoso']==3) {
                echo "Usuario o contraseña incorrectos";
                
            }
            
            ?>
              </span>
    </div>
        </form>
        
    </div>
    
  <footer class="footer-login">Copyright 2022 Juan Quezada</footer>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
   
</body>
</html>
