<?php

    session_start();
    if (!isset($_SESSION['usu'])) {
        header("location: ../index.php?msg2=no_sessao");
    }


?>