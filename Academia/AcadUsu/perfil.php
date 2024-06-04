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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="meu_treino.php">Meu Treino</a></li>
                        <li class="nav-item"><a class="nav-link" href="treinos_realizados.php">Treinos realizados</a></li>
                        <li class="nav-item"><a class="nav-link active" href="perfil.php">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>
            
        </nav>
        <!-- Header-->
        <header class="py-2">

                    
            
            <div class="container px-2 pb-2">

            <form class="form-cadastro1" action="cadastro.php" method="POST" enctype="multipart/form-data">

                            <?php       
                                if(isset( $_SESSION['usuario'])){
                                    include('../banco.php');

                                    $sql = "SELECT * FROM tbusu where id_usu = ".$_SESSION['usuario']." ";
            
                                    $resultado = $conexao->query($sql);
                                         
                                    if ($resultado-> num_rows > 0) {
                                        $linha1 = $resultado->fetch_array();
                                                
                                    }
                                }
                            ?>
                                
                                <div class="card-body1">

                                    <div class="row no-gutters align-items-center">
                                        <div class=" col mr-6">
                                            <h3>Meu perfil</h3>
                                        </div> 
                                        <div class="col mr-6">
                                            
                                            <?php

                                                $id = $_SESSION['usuario'];

                                                echo '<div class="col-12 ir"><a href="editperfil.php?id='.$id.' " '.'><button type="button"  class="btn btn-outline-success">Edite seu perfil</button></a></div>';

                                            ?>
                                        </div>
                                        
                                            
                                    </div>
                                </div>
                            
                            

                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">
                            <div class="row" style="">

                            <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">

                                <div class="row">

                                    <div class="col-12">

                                        <?php echo '<img id="output" src=" '.$linha1['foto_usu'].'" class="img2 col-8" ></img> '; ?>

                                    </div>

                                </div>

                             </div>
                            


                                <div class="form-group1 flex-column col-9">
                                    <div class="form-group1 col-12">
                                        <label for="inputeNome">Nome</label>
                                        <input type="text" class="form-control1" id="nome" name="nome" placeholder="Insira o nome do personal" value= "<?php echo $linha1['nome']; ?>" readonly>
                                    </div>
                                    <div class="form-group1 col-12">
                                        <label for="inputAddress">Email</label>
                                        <input type="email" class="form-control1" id="email" name="email" placeholder="Insira o email do personal" value= "<?php echo $linha1['email']; ?>" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group1 col-12">
                                <label for="inputAddress2">Senha</label>
                                <input type="text" class="form-control1" id="senha" name="senha" placeholder="" value= "<?php echo $linha1['senha']; ?>" readonly>
                            </div>
                            
                            <div class="form-group1 col-md-12">
                                <label for="inputCity">Telefone</label>
                                <input type="tel" class="form-control1" id="tel" name="tel" placeholder="(xx) xxxxx-xxxx" value= "<?php echo $linha1['telefone']; ?>" readonly>
                            </div>
                </form>            
                
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
