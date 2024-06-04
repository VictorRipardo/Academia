<?php

    session_start();
    if (!isset($_SESSION['login'])) {
        header("location: ../index.php?msg2=no_sessao");
    }


?>