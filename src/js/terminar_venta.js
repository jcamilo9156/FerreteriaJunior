function terminar_venta()
{
   var respuesta = confirm ("Estás seguro que deseas finalizar la venta?");
   if (respuesta == true)
   {
       alert("Venta registrada satisfactoriamente, a continuación se generará el pdf con la información de la factura");
     //  window.location.href='../php/landing.php';
   return true;
}
else
{
    return false;
}
}