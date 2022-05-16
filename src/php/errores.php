<?php
            session_start();
            ob_start();
            if ( @$_SESSION ['sesion_exitoso']==2)
             {
           echo "Los campos son obligatorios";
            }
            if ( @$_SESSION ['sesion_exitoso']==3) {
                echo "Usuario o contraseña incorrectos";
                
            }
            
            ?>