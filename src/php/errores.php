<?php
include ('validar-login.php');

            if ( @$_SESSION ['sesion_exitoso']==2)
             {
           echo "Los campos son obligatorios";
           return false;
            }
            
            if ( @$_SESSION ['sesion_exitoso']==3) {
                echo "Usuario o contraseña incorrectos";
                return false;
            }
          
            ?>