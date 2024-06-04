<?php

    if (isset($_POST['finalizar'])) {
        include('../banco.php');

        $idtreino = $_POST['treino'];
        $idusu = $_POST['usu'];

        

        $sql = "INSERT INTO tbtreinorealizado VALUES('','$idusu','$idtreino', NOW())";

        $insert = $conexao->query($sql); 

        if ($insert == true ) {   
            header("location: meu_treino.php?msg7=treino-finalizado");
        }else {
            header("location: meu_treino.php?msg8=nao");
        }
    }


?>