<?php

    include('../banco.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbpersonal WHERE id_adm = '$id' " ;

        $consulta = $conexao->query($sql);
        if ($consulta == true ) {   
            header("location: cadbuscapersonal.php?msg4=usuario_excluido");
        }else {
             header("location: cadbuscapersonal.php?msg5=usuario_nao_excluido");
            }

    }  



?>