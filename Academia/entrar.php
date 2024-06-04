<?php 

    include("banco.php");
    $usuario = $_POST['radioUsuario'];
    $personal = $_POST['radiopersonal'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if (isset($personal) == 'personal') {
        
        $sql = "SELECT * FROM tbpersonal WHERE email = '$email' and senha = '$senha' ";

        $consulta = $conexao->query($sql);

        if ($consulta == true ) {
            if ($consulta-> num_rows > 0) {
                $linha = $consulta->fetch_array(); 
                session_start();
                $_SESSION['login'] = 'ok';
                $_SESSION['personal'] = $linha['id_adm'];
                header("location: principal/principal.php?msg=deu_certo" );
            }else {
                header("location: index.php?msg=deu_errado");
            }
        }
    }

    if (isset($usuario) == 'Usuario' ) {
        
        $sql = "SELECT * FROM tbusu WHERE email = '$email' and senha = '$senha' ";

        $consulta = $conexao->query($sql);

        if ($consulta == true ) {
            if ($consulta-> num_rows > 0) {
                $linha1 = $consulta->fetch_array(); 
                session_start();
                $_SESSION['usu'] = 'ok';
                $_SESSION['usuario'] = $linha1['id_usu'];
                header("location: AcadUsu/index.php?msg=deu_certo" );
            }else {
                header("location: index.php?msg=deu_errado");
            }
        }
    }

?>