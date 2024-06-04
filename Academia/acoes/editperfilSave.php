<?php

    include('../banco.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $personal = $_FILES['personal'];

    // convertendo a img para caminho no banco//    
    $pasta = "../img/personal/";
    $nomeDoArquivo = $personal['name'];
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "jpeg") {
        header('location: edit.php?msg=arquivo_nao_compativel');
    }else{

            $caminho = $pasta.$novoNome.'.'.$extensao;

            $salva = move_uploaded_file($personal["tmp_name"], $caminho);

            

            $sql = "UPDATE tbpersonal SET foto_personal = '$caminho', nome = '$nome', email = '$email', senha = '$senha', telefone = '$tel'  where id_adm = '$id' ";
                    

            $consulta = $conexao->query($sql);

            if ($consulta == true ) {   
                header("location: perfil.php?msg2=perfil_editado");
            }else {
                header("location: perfil.php?msg3=perfil_nao_editado");
            }
        }
?>