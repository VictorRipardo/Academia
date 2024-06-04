<?php

    include('../banco.php');

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $series = $_POST['series'];
        $repeticao = $_POST['repeticao'];
        $Descricao = $_POST['desc'];
        $duracao = $_POST['duracao'];
        $foto = $_FILES['exercicio'];

    
        // convertendo a img para caminho no banco//    
        $pasta = "../img/treinos/exercicios";
        $nomeDoArquivo = $foto['name'];
        $novoNome = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        if ($extensao != "jpg" && $extensao != "jpeg") {
            header('location: editexercicio.php?msg=arquivo_nao_compativel');
        }else{

            $caminho = $pasta.$novoNome.'.'.$extensao;

            $salva = move_uploaded_file($foto["tmp_name"], $caminho);

     
    
            $sql = "UPDATE tbexercicio SET  foto_exercicio = '$caminho' , nome = '$nome', serie = '$series', repeticoes = '$repeticao', descanco_entre_series = '$duracao', descricao = '$Descricao' where id_exercicio =' $id' ";
    
            $consulta = $conexao->query($sql);
    
            if ($consulta == true ) {   
                header("location: treinos.php?msg14=exercicio_editado");
            }else {
                header("location: treinos.php?msg15=exercicio_nao_editado");
            }
        }
?>