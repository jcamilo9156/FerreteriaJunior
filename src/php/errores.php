<?php
include ('validar-login.php');
if (isset($_POST['boton_login'])){
            if ( $_SESSION ['sesion_exitoso']==2)
             {
           echo "
           <div class='avisos'>
           <p>Los campos son obligatorios</p>;
           </div>";
           return false;
            }
         
            if ( $_SESSION ['sesion_exitoso']==3) {
                echo "Usuario o contraseña incorrectos";
                return false;
            }
          }
            ?>