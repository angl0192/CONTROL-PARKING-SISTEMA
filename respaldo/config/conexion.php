<?php

$conexion = mysqli_connect('localhost', 'ejstorec_angl0192', 'Lahll920121*-):D', 'ejstorec_bdcontrolparking');

if(mysqli_connect_errno()){
    echo "Fallo la conexion";
}

mysqli_set_charset($conexion, "utf8");
