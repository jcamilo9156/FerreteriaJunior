<?php
ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <!-- Aplico estilos a la tabla ya que no me cargan estilos externos -->
   <style>
       @page{
           margin-left: 0;
           margin-right: 0;
       }
       h1{
           color: red;
        font-family:sans-serif;
       }
       th {
           background-color: red;
       }

td,th{
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    border: black 1px solid;
    width: 5%;
}
th{
    background-color: #c7bb1a;
    height: 30px;

}
       </style>
<body>
   <center><h1>Reporte de Proveedores Registrados</h1></center> 
<?php

include('conexion.php');
include('buscar-proveedores.php');

$query = "SELECT * FROM proveedores";
$ejecucion = mysqli_query($conexion, $query); ?>

<div>
<table>
    <tr>
           <th>Nombre o Razón Social</th>
        <th>Identificación</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Categoría</th>
        
        </tr>";
 <?php
while ($consulta = mysqli_fetch_array($ejecucion)){
    echo "<tr>";
    echo "<td>"; echo $consulta['Nombre']; echo "</td>";
     echo "<td>";  echo $consulta['Identificacion']; echo "</td>";
    echo  "<td>"; echo $consulta['Direccion']; echo "</td>";
     echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
     echo "<td>"; echo $consulta['Telefono']; echo "</td>";
     echo "<td>"; echo $consulta['Correo']; echo "</td>";
     echo "<td>"; echo $consulta['Categoria']; echo "</td>";
  
}   

 ?>
 </table>
 </div>
</body>
</html>
<?php
$html = ob_get_clean(); 
// echo $html; 
// Ingresamos Dom PDF

require_once ('../../Libreria/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Css\Stylesheet;
$dompdf = new Dompdf();

$options = $dompdf ->getOptions();
$options -> set(array('isRemoteEnabled' => true));
$dompdf ->setOptions($options);

$dompdf ->loadHtml($html);
$dompdf->setPaper( [0, 0, 853,582,  283,465]); 
/* Opciones de papel
$dompdf->setPaper('letter');
$dompdf->setPaper('A4', 'horizontal');
*/

$dompdf ->render();
$dompdf ->stream("archivo_.pdf", array("Attachment" =>false));

?>

