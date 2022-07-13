

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
    <h1>Listado Productos Pedido</h1>
<form action="lista-compra.php" method="POST">
<table class='table'>
<tr>

<thead>
            <th>Cantidad</th>    
            <th>Descripción</th>
            <th>Precio Unitario</th>
            <th>Total sin Iva</th>
            <th>Acción</th>
    </thead>
    </tr>


    <?php
include ('src/php/conexion.php');
$consulta = "SELECT * FROM ventas";
$ejecucion = mysqli_query($conexion, $consulta);
$subtotal = 0; // Inicializo variable en 0 para que sume el valor de las filas que existan
while ($arreglo = mysqli_fetch_array($ejecucion)) {
$subtotal= $subtotal+$arreglo['subtotal']; 
$iva = $subtotal*0.19; //calculamos el iva tomando el subtotal y aplicando el 19%
$total = $subtotal+$iva;  // sumamos el subtotal y  el iva dando el total de la venta
echo "
      
<tbody>

    <tr>   
     <td>  $arreglo[cantidad]</td>
     <td>  $arreglo[nombre_producto]</td>
        <td><b>$arreglo[precio_unitario]</b></td>
        <td><b>$arreglo[subtotal]</b></td>
        <td id='borrar-producto-pedido'><a href='src/php/borrar-producto-pedido.php?id_venta= ".$arreglo['id_venta']."&cantidad=".$arreglo['cantidad']."&nombre_producto=".$arreglo['nombre_producto']."' class='link-danger'><i class='fa-solid fa-trash-can' title='Borrar Producto' onclick='return confirmdelete()'></i></a></td> 
    </tr>";?>
    <?php ;}?>
    <tr>
    <td class="table-active"></td>
    <td class="table-active"></td>
    <td class="table-active"colspan="">Total Productos a Facturar</td>
    <?php $conteofilas=mysqli_num_rows($ejecucion); ?> <!-- Hacemos conteo de filas para saber el total de articulos -->
    <td class="table-active"><?php echo $conteofilas; ?></td>
    <td class="table-active"></td>
    </tr>
    <tr>
    <td class="table-active"></td>
    <td class="table-active"></td>
        <td class="table-active"colspan="">Subtotal</td>
        <td class="table-active">$
         <?php echo $subtotal?></td>
         <td class="table-active"></td>
    </tr>
    <tr>
    <td class="table-active"></td>
    <td class="table-active"></td>
    <td  class="table-active" colspan="1"
       colspan="">Iva 19%</td>
        <td colspan="" class="table-active">$ <?php echo $iva;?>
        </td>
        <td class="table-active"></td>
    </tr>
    <tr>
    <td class="table-active"></td>
    <td class="table-active"></td>
        <td class="table-active" colspan="1"><b>Total</b>
             <td colspan=""class="table-active"><b>$ <?php echo $total ?><b></td>
             <td class="table-active"></td>
    </tr>
</tbody> 
    
    </table>
    
    <div class="botones-factura">
    <input type="submit" name="continuar_venta" value="Continuar venta">
   <button type="submit" name="volver_a_ventas"class="boton-volver">Volver a módulo ventas</button>
    </div>
    </form>


    <div>
   <?php
   include('src/php/continuar-compra.php');
   include('src/php/buscar-cliente-compra.php');
   ?>
    </div>

  
    
   
  
<!-- <input type="submit" name='finalizar-venta' value='Finalizar venta'> -->
</div>
</div>

</div>


    <script src='https://kit.fontawesome.com/655f5b609a.js' crossorigin='anonymous'></script>
    <script src= '../js/inactividad.js'></script>
    <script src="src/js/funcion-borrar.js"></script> 
    <script src="src/js/terminar_venta.js"></script> 
</body>
</html>
