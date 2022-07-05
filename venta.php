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
 <link rel="stylesheet" href="src/css/estilos-factura.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="main-container">
        <div class="factura">
    <h1>Factura Venta</h1>
    <table class="table table-bordered">
        <thead>
       
            <th>Cantidad</th>    
            <th>Descripción</th>
            <th>Precio Unitario</th>
    </thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Cemento Gris x50 Kg</td>
        <td><b>50000</b></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Cemento Gris x50 Kg</td>
        <td>50000</td>
    </tr>
       <tr>
        <td></td>
        <td class="table-active">Total Productos</td>
        <td class="table-active">2</td>
        </tr>
        <tr>
            <td></td>
            <td class="table-active">Subtotal</td>
            <td class="table-active">$ 100000</td>
        </tr>
        <tr>
            <td></td>
            <td class="table-active">Impuesto</td>
            <td class="table-active">$ 19000</td>
        </tr>
        <tr>
            <td class="bordered"></td>
            <td class="table-active">Total</th>
                <td class="table-active"><b>$ 119000</b></td>
        </tr>
    </tbody> 
    </table>

</div>
</div>
<div class="botones-factura">
    <input type="Submit" name="finalizar-venta" value="Finalizar venta">
    <a href=""><button class="boton-volver">Volver a módulo ventas</button></a>
</div>
    <script src="https://kit.fontawesome.com/655f5b609a.js" crossorigin="anonymous"></script>
    <script src= "../js/inactividad.js"></script>
</body>
</html>
