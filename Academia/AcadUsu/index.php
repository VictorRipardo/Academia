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
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-straight/css/uicons-solid-straight.css'>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <?php 
        include('../banco.php');
        $id = $_SESSION['usuario'];

        $sql = "SELECT * FROM tbusu WHERE id_usu = $id ";

        $consulta = $conexao->query($sql);

        if ($consulta == true ) {
            if ($consulta-> num_rows > 0) {
                $linha = $consulta->fetch_array(); 
            }
        }
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
                            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="meu_treino.php">Meu Treino</a></li>
                            <li class="nav-item"><a class="nav-link" href="treinos_realizados.php">Treinos realizados</a></li>
                            <li class="nav-item"><a class="nav-link" href="perfil.php">Meu perfil</a></li>
                            <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
                            
                        </ul>
                    </div>
                </div>
                
            </nav>
            <!-- Header-->
            <header class="py-0">
                
                <div class="container px-2 pb-2">
                    <div class="row gx-5 align-items-center">
                        <div class="col-6">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <?php echo '<div class="fs-3  text-muted fw-bold">Seja Bem Vindo '.$linha['nome'].'! </div>';?>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Comece seu treino</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="meu_treino.php">Meu Treino</a>
                                </div>
                            </div>
                        </div>
                            <div class="col-5">
                                
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                    <div class="profile bg-gradient-primary-to-secondary">
                                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                        <img class="profile-img" src="../img/index.png" alt="..." />
                                        
                                        
                                    <!--</div>-->
                                </div>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
