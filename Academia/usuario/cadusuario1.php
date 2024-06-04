<?php

    include('../banco.php');

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $usu = $_FILES['usu'];

    // convertendo a img para caminho no banco//    
    $pasta = "../img/usuarios/";
    $nomeDoArquivo = $usu['name'];
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "jpeg") {
        header('location: cadusuario.php?msg=arquivo_nao_compativel');
    }else{

            $caminho = $pasta.$novoNome.'.'.$extensao;

            $salva = move_uploaded_file($usu["tmp_name"], $caminho);

            

            $sql = "INSERT INTO tbusu VALUES('','$caminho','$nome','$email','$senha','$tel','ativo') ";

            $consulta = $conexao->query($sql);

            if ($consulta == true ) {   
                header("location: cadusuario.php?msg2=usuario_cadastrado");
            }else {
                header("location: cadusuario.php?msg3=usuario_nao_cadastrado");
            }
        }
?>