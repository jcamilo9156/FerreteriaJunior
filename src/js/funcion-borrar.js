function confirmdelete()
{
   var respuesta = confirm ("Estás seguro que deseas eliminar el registro?");
   if (respuesta == true)
   {
       alert("Registro Eliminado Satisfactoriamente");
     //  window.location.href='../php/landing.php';
   return true;
}
else
{
    return false;
}
}