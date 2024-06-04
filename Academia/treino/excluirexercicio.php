<?php

    include('../banco.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbexercicio WHERE id_exercicio = '$id' " ;

        $consulta = $conexao->query($sql);
        if ($consulta == true ) {   
            header("location: treinos.php?msg10=exercicio_excluido");
        }else {
             header("location: treinos.php?msg11=exercicio_nao_excluido");
            }

    }  



?>