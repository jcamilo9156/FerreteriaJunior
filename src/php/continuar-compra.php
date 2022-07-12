<?php 

// Si hago click en continuar compra me despliega las opciones de búsqueda cliente y vendedor

if (isset($_POST['finalizar_venta'])) {
    echo " <div class='campo-busqueda'>";?>
    <form action="lista-compra.php" method="POST">
    Buscar Cliente <input type="text" name="idcliente" placeholder="Identificación" minlength="10"  maxlength="10" required autofocus>
    <input type="submit" name="buscar-cliente" value="Buscar" class="buscar-cliente">
    Vendedor: <select name="select_vendedor" id="">
<?php
            include ('lista-vendedores.php'); ?>
            </select>

            <?php 
          
        
        
        }
         echo "</div>";

// Si hago click en volver me lleva al modulo de ventas con un script pequeño

if (isset($_POST['volver_a_ventas'])) {
    echo "<script>window.location.href='mod-ventas.php'</script>";
}
            ?>
