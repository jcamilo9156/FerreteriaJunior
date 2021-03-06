<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Venta</title>
    <link rel="stylesheet" href="src/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
 
</head>

<style>
     @page{
           margin-left: 0;
           margin-right: 0;
       }
/* Variables */
:root{
    --color-principal:#4395F6;
    --color-secudario:aliceblue;
    --iconos-landing: 80px;
    }
    
    /* Globales*/
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
  
    }
    body{
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
;
    }
    /* Fin Globales */

.main-container
    h1{
        margin-top: 40px;
        margin-bottom: 30px;
        color: var(--color-principal);
        text-align: center;
        color: red;
        font-family: 'PT Sans';
    }
    table{
        margin: auto;
        margin-top: 50px;
       /* width: 50% !important; */
        border-collapse: collapse;
    }
    .table td, .table th{
        padding:0.75rem;
        vertical-align: top;
        font-family: "PT", 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
         border: black 1px solid;
    width: 5%;
    text-align: center;
    border: 0px;
   
    
}
    
.cabecera{
text-align: center;
background-color:rgb(98, 138, 173);
width: 100%;
padding: 10px;
}
td{
    text-align: center;
   padding: 10px !important;
   
}
.td-totales{
    border:0px !important;
   
}
.td-totalizador{
    background-color:#C0C0C0;
}

header{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.header-factura{
margin: 30px 40px 10px;
line-height: 25px;
font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  
}
.header-factura2{
    border: solid 2px;
    border-radius: 10px;
    margin:30px 40px 10px;
    font-size: 10px;
    padding: 10px;
    width: 350px;
}
p{
    font-size: 15px;
    line-height: 25px;
}
.final-factura{
    text-align: center;
    margin-top: 20px;
    font-family: 'PT Sans';
}
</style>
<?php  

// Traigo informaci??n b??sica por get

$fecha = $_GET['fecha'];
$vendedor = $_GET['vendedor'];
$cliente = $_GET['cliente'];
$forma_pago = $_GET['forma_pago'];

// Traigo la info. de la tabla ventas(previo a generaci??n de factura)
include ('conexion.php');
$consulta = "SELECT * FROM ventas";
$ejecucion = mysqli_query($conexion, $consulta);

// Insertamos la informaci??n extra??da de la tabla ventas en la tabla factura_venta

while ($arreglo = mysqli_fetch_array($ejecucion)) {
        $cantidad = $arreglo['cantidad'];
        $nombre = $arreglo['nombre_producto'];
        $precio_unitario = $arreglo['precio_unitario'];
        $subtotal = $arreglo['subtotal'];
        $total = $arreglo['total'];

}
$consulta = "INSERT INTO factura_venta(fecha_venta, nombre_vendedor, nombre_cliente,
cantidad, descripcion, valor_unitario, subtotal, total, forma_pago) VALUES ('$fecha',
'$vendedor','$cliente', '$cantidad','$nombre','$precio_unitario',
'$subtotal','$total','$forma_pago')";
$ejecucion = mysqli_query($conexion, $consulta);


// Consultamos la tabla factura_venta y asignamos variable para consecutivo de factura

$consulta = "SELECT * FROM factura_venta";
$ejecucion = mysqli_query($conexion, $consulta);

while ($arreglo = mysqli_fetch_array($ejecucion)) {
    $id_factura =$arreglo['id_factura']; // variable consecutivo factura
    $descripcion = $arreglo['descripcion'];
    $subtotal = $arreglo['subtotal'];
    $total = $arreglo['total'];
    $forma_pago = $arreglo['forma_pago'];
}

?>
<?php /*
$subtotal = 0; // Inicializo variable en 0 para que sume el valor de las filas que existan
while ($arreglo = mysqli_fetch_array($ejecucion)) {
$subtotal= $subtotal+$arreglo['subtotal']; 
$iva = $subtotal*0.19; //calculamos el iva tomando el subtotal y aplicando el 19%
$total = $subtotal+$iva;  // sumamos el subtotal y  el iva dando el total de la venta
$nombre_producto = $arreglo['nombre_producto'];
}*/?>
 
<header>
<div class="header-factura">    
<H2>Ferreteria Junior S.A.S</H2>
<H3>Nit: 900054341-1</H3>
<h4>Carrera 54 Sur # 34-22</h4>
<h4>Bogot?? - Colombia</h4>

</div>
<div class="header-factura2">
    <h1>N?? Factura: <?php echo $id_factura;?></h1>
    <p>Cliente: <?php echo $cliente; ?> </p>
    <p>Vendedor: <?php echo $vendedor; ?></p>
    <p>Fecha de generaci??n factura: <?php echo $fecha?></p> 
    <p>Forma de pago: <?php echo $forma_pago?></p> 
</div>
</header>
<body>
<div class="main-container">
        <div class="factura">
    <h1>Factura Venta</h1>
<table class='table'>
  
<tr>
            <th class="cabecera">Cantidad</th>    
            <th class="cabecera">Descripci??n</th>
            <th class="cabecera">Precio Unitario</th>
            <th class="cabecera">Total sin Iva</th>  
    </tr>


<?php 

// Consultamos la tabla relacionada con la fecha y id factura,
// si se hacen dos ventas al mismo tiempo s??lo me muestra la que corresponde al id actual

$consulta = "SELECT * FROM factura_venta WHERE id_factura = '$id_factura'";
$ejecucion = mysqli_query($conexion, $consulta);


while ($arreglo = mysqli_fetch_array($ejecucion)) {

echo " <tr>
<td>$arreglo[cantidad]</td>
<td>$arreglo[descripcion]</td>
<td>$arreglo[valor_unitario]</td>
<td>$arreglo[subtotal]</td>
</tr>" ;} 
 ?>

<tr>
    <td class="td-totales"></td>
    <td class="td-totales"></td>
    <td class="td-totalizador"colspan="">Total Productos a Facturar</td>
    <?php $conteofilas=mysqli_num_rows($ejecucion); ?> <!-- Hacemos conteo de filas para saber el total de articulos -->
    <td class="td-totalizador"><?php echo $conteofilas?></td>
    </tr>
    <tr>
    <td class="td-totales"></td>
    <td class="td-totales"></td>
        <td class="td-totalizador"colspan="">Subtotal</td>
        <td class="td-totalizador">$ <?php echo $subtotal?></td>
         
    </tr>
    <tr>
    <td class="td-totales"></td>
    <td class="td-totales"></td>
    <td  class="td-totalizador">Iva 19%</td> <?php
$iva = $subtotal*0.19; //calculamos el iva tomando el subtotal y aplicando el 19%

        ?><td colspan="" class="td-totalizador">$ <?php echo $iva;?>
        
    </tr>
    <tr>
    <td class="td-totales"></td>
    <td class="td-totales"></td>
        <td class="td-totalizador" ><b>Total</b>
             <td class="td-totalizador"><b>$ <?php echo $total ?><b></td>
             
    </tr>


    </table>
  
        </div></div>
       
        <div class="final-factura">
            <h2>Gracias por su compra</h2>
            <p><b>Recuerde que tiene 48 horas para realizar cualquier reclamo,
                 pasado ese tiempo no se aceptan reclamaciones.</p>
        </div>
</body>
</html>

<?php

$html=ob_get_clean(); 
//echo $html; 
 //Ingresamos Dom PDF
 require_once ('../../Libreria/dompdf/autoload.inc.php');
 use Dompdf\Dompdf;
 use Dompdf\Css\Stylesheet;
 $dompdf = new Dompdf();
 
 $options = $dompdf ->getOptions();
 $options -> set(array('isRemoteEnabled' => true));
 $dompdf ->setOptions($options);
 
 $dompdf ->loadHtml($html);
 $dompdf->setPaper( [0, 0, 853,582,  283,465]); 
 /*Opciones de papel
 $dompdf->setPaper('letter');*/
 $dompdf->setPaper('A4', 'horizontal');
 
 
 $dompdf ->render();
 $dompdf ->stream("factura_venta.pdf", array("Attachment" =>false));

 $consulta = "DELETE FROM ventas"; //Borramos el registro de ventas ya que se incluy?? en la tabla factura_venta
 $ejecucion = mysqli_query($conexion, $consulta);
 return true;

/*
$consulta = "SELECT * FROM ventas";
$ejecucion = mysqli_query($conexion, $consulta);
while ($arreglo=(mysqli_fetch_array($ejecucion))) {
    $cantidad = $arreglo['cantidad'];
    $nombre = $arreglo['nombre_producto'];
    $consulta = "INSERT INTO factura_venta(fecha_venta, nombre_vendedor, nombre_cliente,
    cantidad, descripcion, valor_unitario, subtotal, total, forma_pago)VALUES ('$arreglo[fecha]',
    '$vendedor','$cliente', '$arreglo[cantidad]','$arreglo[nombre_producto]','$arreglo[precio_unitario]',
    '$arreglo[subtotal]','$arreglo[total]','$forma_pago')";
$ejecucion = mysqli_query($conexion, $consulta);

if ($ejecucion) {
   $consulta = "DELETE FROM ventas"; //Borramos el registro de ventas ya que se incluy?? en la tabla factura_venta
   $ejecucion = mysqli_query($conexion, $consulta);
   return true;
}
  
}*/
?>