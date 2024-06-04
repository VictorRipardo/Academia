<?php

    include('../banco.php');

    $id = $_POST['id'];
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
        header('location: edit.php?msg=arquivo_nao_compativel');
    }else{

            $caminho = $pasta.$novoNome.'.'.$extensao;

            $salva = move_uploaded_file($usu["tmp_name"], $caminho);

            

            $sql = "UPDATE tbusu SET foto_usu = '$caminho', nome = '$nome', email = '$email', senha = '$senha', telefone = '$tel'  where id_usu = '$id' ";
                    

            $consulta = $conexao->query($sql);

            if ($consulta == true ) {   
                header("location: cadbuscausuario.php?msg2=usuario_editado");
            }else {
                header("location: cadbuscausuario.php?msg3=usuario_nao_editado");
            }
        }
?>