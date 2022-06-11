<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subir Imagen</h1>
    <form action="carga-imagen.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="file" name="imagen"> <br><br>
    <input type="submit" name="enviar"value="Enviar">
 
</form>
</body>
</html>