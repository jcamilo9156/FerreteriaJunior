<?php
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 <> $password2) {
    echo "Ambos Campos Deben Coincidir";
} 



?>