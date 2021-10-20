<?php

session_start();
if (isset($_SESSION['user'])) {
    $id_user = $_SESSION['user'];
} else {
    session_destroy();
    header("location: ../index.php?msg=Você foi expulso");
}

?>