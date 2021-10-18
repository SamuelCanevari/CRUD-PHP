<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
        // echo "conectado";
    } else {
        echo "erro";
    }

    function message($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>$texto
        </div>";
    }

?>