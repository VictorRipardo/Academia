<?php

    include('../banco.php');

        $id = $_POST['id'];
    
        $nometreino = $_POST['nometreino'];
        $Descricao = $_POST['desc'];
    
            $sql = "UPDATE tbtreino SET  Nome = '$nometreino', descricao = '$Descricao' where id_treino =' $id' ";
    
            $consulta = $conexao->query($sql);
            
            $caminho = $pasta.$novoNome.'.'.$extensao;

        $salva = move_uploaded_file($foto["tmp_name"], $caminho);
    
            if ($consulta == true ) {   
                header("location: treinos.php?msg17=treino_editado");
            }else {
                header("location: treinos.php?msg15=treino_nao_editado");
            }
?>