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
   <center><h1>Reporte de usuarios del sistema</h1></center> 
<?php

include('conexion.php');
include('buscar-usuario.php');

$query = "SELECT * FROM usuarios";
$ejecucion = mysqli_query($conexion, $query); ?>

<div>
<table>
    <tr>
    <th>Usuario</th>
    <th>Clave</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Identificación</th>
    <th>Direccion</th>
    <th>Barrio</th>
    <th>Ciudad</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>Tipo Usuario</th>
</tr>

 <?php
while ($consulta = mysqli_fetch_array($ejecucion)){
    echo "<tr>";
        echo "<td>"; echo $consulta['Usuario']; echo "</td>";
        echo "<td>"; echo $consulta['Clave']; echo "</td>";
        echo "<td>"; echo $consulta['Nombres']; echo "</td>";
        echo "<td>"; echo $consulta['Apellidos']; echo "</td>";
        echo "<td>"; echo $consulta['Identificacion']; echo "</td>";
        echo "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Barrio']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Tipo_usuario']; echo "</td>";
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








