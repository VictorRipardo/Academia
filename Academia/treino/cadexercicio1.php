<?php

    include('../banco.php');

    $id_treino = $_POST['id'];
    $nome = $_POST['nome'];
    $series = $_POST['series'];
    $repeticao = $_POST['repeticao'];
    $Descricao = $_POST['desc'];
    $duracao = $_POST['duracao'];
    $foto = $_FILES['exercicio'];

    // convertendo a img para caminho no banco//    
    $pasta = "../img/treinos/exercicios/";
    $nomeDoArquivo = $foto['name'];
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "jpeg") {
        header('location: cadexercicio.php?msg=arquivo_nao_compativel');
    }else{

        $caminho = $pasta.$novoNome.'.'.$extensao;

        $salva = move_uploaded_file($foto["tmp_name"], $caminho);

        

        $sql = "INSERT INTO tbexercicio VALUES('','$id_treino','$caminho','$nome','$series','$repeticao','$duracao','$Descricao') ";

        $consulta = $conexao->query($sql);

        if ($consulta == true ) {   
            header("location: treinos.php?msg7=exercicio_cadastrado");
        }else {
            header("location: cadexercicio.php?msg8=editado_nao_cadastrado");
        }
    }
?>