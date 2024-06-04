<?php

    include('../banco.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbtreino WHERE id_treino = '$id' " ;

        $consulta = $conexao->query($sql);
        if ($consulta == true ) {   
            header("location: treinos.php?msg4=treino_excluido");
        }else {
             header("location: treinos.php?msg5=treino_nao_excluido");
            }

    }  



?>