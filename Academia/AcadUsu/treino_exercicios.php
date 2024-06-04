<?php

include('testa_sessao/testa_sessao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Theme</title>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-straight/css/uicons-solid-straight.css'>

</head>
<?php 
    $idusu = $_SESSION['usuario'];


?>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white  py-3">
            <div class=" bg-warning menus container px-3">
                <img class="logo" src="../img/logo.png" alt="" srcset="">

                <h5 class="nav-h5"></h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small ">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="meu_treino.php">Meu Treino</a></li>
                        <li class="nav-item"><a class="nav-link" href="treinos_realizados.php">Treinos realizados</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>
            
        </nav>
        <!-- Header-->
        <header class="py-2">
            
            <div class="container px-2 pb-2">
                <p class="m-3 fw-bold">Comece seus exercicios e quando terminar clique em finalizar treino </p> 
                    <?php

                        include('../banco.php');

                            $idtreino = $_GET['id'];
                            $sql = "SELECT * FROM tbexercicio where id_treino = $idtreino";

                            $resultado = $conexao->query($sql);
                            
                            if ($resultado-> num_rows > 0) {
                                while ($linha = $resultado->fetch_array()) {
                                    echo '    <div class="d-flex flex-column shadow">';
                                    echo '      <div class="select col-xl-12 col-md-12 mb-12">';
                                    echo '            <div class="card1 border-left-warning h-100 ">';
                                    echo '                <div class="card-body">';
                                    echo '                    <div class="row no-gutters align-items-center">';
                                    echo '                        <div class="col mr-2"><img class="foto_exercicio" src=" '.$linha['foto_exercicio'].' " ></div>';
                                    echo '                        <div class="desc col mr-4"><h6>'.$linha['nome'].'</h6><h6>'.$linha['serie'].' series x de '.$linha['repeticoes'].' repetições</div>';
                                    echo '                    </div>';
                                    echo '                </div>';
                                    echo '            </div>';
                                    echo '        </div>';
                                    echo '        <div class="select col-xl-12 col-md-12 mb-12">';
                                    echo '            <div class="card1 border-left-warning h-100">';
                                    echo '                <div class="card-body">';
                                    echo '                    <div class="row no-gutters align-items-center">';
                                    echo '                         <div class="col mr-6"><a id="descanso">'.$linha['descanco_entre_series'].'</a> <span>( Descanço entre series )</span></div>';
                                    echo '                    </div>';
                                    echo '                </div>';
                                    echo '            </div>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '    </br>';
                                }
                                
                                }else {
                                    echo '<div class=" w-80 alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Nao existe nenhum exercicio associado a esse treino!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                }
                            
                        
                        
                    ?>

                    <div class="select col-xl-12 col-md-12 mb-12">
                        <form action="finalizar_treino.php" method="post">
                            <input type="hidden" name="treino" value="<?php echo $idtreino ?>">
                            <input type="hidden" name="usu" value="<?php echo $idusu ?>">

                            
                            <button type="submit" class="w-100 btn btn-dark" name="finalizar" >Finalizar treino</button>
                        
                    
                        </form>
                        
                    </div>
                        
                    </div>           
                </div>
            </div>
        </header>
        <!-- About Section-->
        <br>
        
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Core theme JS-->
</body>
</html>
