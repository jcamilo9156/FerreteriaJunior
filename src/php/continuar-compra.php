<?php 

// Si hago click en continuar compra me despliega las opciones de búsqueda cliente y vendedor

if (isset($_POST['finalizar_venta'])) {
    echo " <div class='campo-busqueda'>
    <form action='#'>
    Buscar Cliente<input type='text' name='idcliente' placeholder='Identificación' maxlength='10' required>
    <input type='submit' name='buscar-cliente' value='Buscar' class='buscar-cliente'>
    Vendedor: <select name='selecthola' id=''>";?>
    <?php
            include ('lista-vendedores.php'); ?>
            </select>

            <?php }

// Si hago click en volver me lleva al modulo de ventas con un script pequeño

if (isset($_POST['volver_a_ventas'])) {
    echo "<script>window.location.href='mod-ventas.php'</script>";
    }


            ?>
