<?php
ob_start();
?>
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
<h1>Hola</h1>
</body>
</html>
<?php 
$html = ob_get_clean(); 
 echo $html; 
 //Ingresamos Dom PDF

require_once ('../FerreteriaJunior/Libreria/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Css\Stylesheet;
$dompdf = new Dompdf();

$options = $dompdf ->getOptions();
$options -> set(array('isRemoteEnabled' => true));
$dompdf ->setOptions($options);

$dompdf ->loadHtml($html);
$dompdf->setPaper( [0, 0, 853,582,  283,465]); 
// Opciones de papel
$dompdf->setPaper('letter');
$dompdf->setPaper('A4', 'horizontal');


$dompdf ->render();
$dompdf ->stream("archivo_.pdf", array("Attachment" =>false));

?>
