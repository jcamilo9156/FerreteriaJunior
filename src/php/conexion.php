<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:serverferreteria.database.windows.net,1433; Database = bd_ferreteriajunior", "juan", "Sena2022*");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
<?php
/*
mysqli_report(MYSQLI_REPORT_ERROR);
$conexion = @mysqli_connect('sqlferreteriajunior.mysql.database.azure.com' , 'Juan@sqlferreteriajunior' , 'Sena2022*', 'bd_ferreteriajunior');
if(!$conexion) {
    echo ("Error al conectar a la base de datos");
}
else {
echo("Conexión Correcta a la base de datos");
}
*/
?>
