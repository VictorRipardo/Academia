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
                header("location: cadbuscapersonal.php?msg2=personal_editado");
            }else {
                header("location: cadbuscapersonal.php?msg3=personal_nao_editado");
            }
        }
?>