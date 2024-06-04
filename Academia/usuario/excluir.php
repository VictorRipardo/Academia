<?php

    include('../banco.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbusu WHERE id_usu = '$id' " ;

        $consulta = $conexao->query($sql);
        if ($consulta == true ) {   
            header("location: cadbuscausuario.php?msg4=usuario_excluido");
        }else {
             header("location: cadbuscausuario.php?msg5=usuario_nao_excluido");
            }

    }  



?>