<?php

    include('../banco.php');

    $nometreino = $_POST['nometreino'];
    $Descricao = $_POST['desc'];

        $sql = "INSERT INTO tbtreino VALUES('','$nometreino','$Descricao') ";

        $consulta = $conexao->query($sql);

        if ($consulta == true ) {   
            header("location: cadtreino.php?msg2=treino_cadastrado");
        }else {
            header("location: cadtreino.php?msg3=treino_nao_cadastrado");
        }
    
?>