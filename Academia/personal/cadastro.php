<?php

    include('../banco.php');

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
        header('location: cadpersonal.php?msg=arquivo_nao_compativel');
    }else{

            $caminho = $pasta.$novoNome.'.'.$extensao;

            $salva = move_uploaded_file($personal["tmp_name"], $caminho);

            

            $sql = "INSERT INTO tbpersonal VALUES('','$caminho','$nome','$email','$senha','$tel') ";

            $consulta = $conexao->query($sql);

            if ($consulta == true ) {   
                header("location: cadpersonal.php?msg2=personal_cadastrado");
            }else {
                header("location: cadpersonal.php?msg3=personal_nao_cadastrado");
            }
        }
?>