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
    function clear($conexao, $texto_puro) {
        $texto = mysqli_real_escape_string($conexao, $texto_puro);
        $texto = htmlspecialchars($texto);
        return $texto;
    }


?>