<?php

    include("../teste_sessao/testa_sessao.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Academia Fit - cadastro de personal</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-straight/css/uicons-solid-straight.css'>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <div class="sidebar-brand-icon ">
                    <img src="../img/logo.png" class="logo1" alt="logo" >
                </div>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="../principal/principal.php">
                <img src="../img/icon/home.png" alt="home">
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="../treino/treinos.php">
                <img src="../img/icon/treino.png" alt="home">
                    <span>Treinos</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="../usuario/cadbuscausuario.php">
                <img src="../img/icon/user.png" alt="home">
                    <span>Usuarios</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="../personal/cadbuscapersonal.php">
                    <img src="../img/icon/personal.png" alt="personal">
                    <span>Personal</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - cadastro treino -->
                <li class="nav-item">
                    <a class="nav-link" href="../treino/cadtreino.php">
                        <img src="../img/icon/treino.png" alt="home">
                        <span>Cadastrar treinos</span>
                    </a>
                
                </li>

            <!-- Nav Item - cadastro usuarios -->
                <li class="nav-item">
                    <a class="nav-link" href="../usuario/cadusuario.php" >
                        <img src="../img/icon/user.png" alt="home">
                        <span>Cadastrar usuarios</span>
                    </a>
                
                </li>

            <!-- Nav Item - cadastro personal -->
                <li class="nav-item ">
                    <a class="nav-link " href="../personal/cadbuscapersonal.php" >
                        <img src="../img/icon/personal.png" alt="personal">
                        <span>Cadastrar Personal</span>
                    </a>
                
                </li>


        

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    
                    <?php       
                                if(isset( $_SESSION['personal'])){
                                    include('../banco.php');

                                    $sql = "SELECT * FROM tbpersonal where id_adm = ".$_SESSION['personal']." ";
            
                                    $resultado = $conexao->query($sql);
                                         
                                    if ($resultado-> num_rows > 0) {
                                        while ($linha = $resultado->fetch_array()) {
                                                echo '<ul class="navbar-nav ml-auto">';
                                                echo '<li class="nav-item dropdown no-arrow">';
                                                echo '<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                                                echo '<span>'.$linha['nome'].'</span>';
                                                echo '<img class="img-profile rounded-circle" src=" '.$linha['foto_personal'].'">';
                                                echo '</a>';
                                                echo '<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">';
                                                echo '<a class="dropdown-item" href="../acoes/perfil.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Perfil</a>';
                                                echo '<a class="dropdown-item" href="../acoes/configuracao.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Configurações</a>';
                                                echo '<div class="dropdown-divider"></div>';
                                                echo '<a class="dropdown-item" href="../acoes/sair.php" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Sair</a>';
                                                echo '</div>';
                                                echo '</li>';
                
                                                echo '</ul>';
                
                                
                                            }
                                    }
                                }
                            ?>

                </nav>
                <!-- End of Topbar -->

                <form class="form-cadastro" action="cadastro.php" method="POST" enctype="multipart/form-data">
                            
                            
                            <?php
                            
                                if (isset($_GET['msg2']) == 'perfil_editado') {
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Perfil editado com sucesso! </strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';

                                }
                                if (isset($_GET['msg3']) == 'perfil_nao_editado') {
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <h6 style="color:white;">Perfil nao editado!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                }
                                if (isset($_GET['msg']) == 'arquivo_nao_compativel') {
                                    echo '<div class="alert  alert-dismissible fade show" role="alert" style="background-color:rgb(187, 40, 40);">
                                            <h6 style="color:white; font-weight:bold; font-size:20px">Arquivo nao compativel </h6>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                }
                            
                            ?>

                            <?php       
                                if(isset( $_SESSION['personal'])){
                                    include('../banco.php');

                                    $sql = "SELECT * FROM tbpersonal where id_adm = ".$_SESSION['personal']." ";
            
                                    $resultado = $conexao->query($sql);
                                         
                                    if ($resultado-> num_rows > 0) {
                                        $linha1 = $resultado->fetch_array();
                                                
                                    }
                                }
                            ?>
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class=" col mr-6">
                                            <h3>cadastre um personal</h3>
                                        </div> 
                                        <div class="col mr-6">
                                            
                                            <?php

                                                $id = $_SESSION['personal'];

                                                echo '<div class="col-12 ir"><a href="editperfil.php?id='.$id.' " '.'><button type="button"  class="btn btn-outline-success">Edite seu perfil</button></a></div>';

                                            ?>
                                        </div>
                                        
                                            
                                    </div>
                                </div>
                            
                            

                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">
                            <div class="row" style="">

                            <div class=" col-xs-8 col-sm-3 col-md-3 col-lg-3 ">

                                <div class="row">

                                    <div class="col-12">

                                        <?php echo '<img id="output" src=" '.$linha1['foto_personal'].'" class="img3 col-8" ></img> '; ?>

                                    </div>

                                </div>

                             </div>
                            


                                <div class="form-group flex-column col-9">
                                    <div class="form-group col-12">
                                        <label for="inputeNome">Nome</label>
                                        <input type="text" class="form-control1" id="nome" name="nome" placeholder="Insira o nome do personal" value= "<?php echo $linha1['nome']; ?>" readonly>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="inputAddress">Email</label>
                                        <input type="email" class="form-control1" id="email" name="email" placeholder="Insira o email do personal" value= "<?php echo $linha1['email']; ?>" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group col-12">
                                <label for="inputAddress2">Senha</label>
                                <input type="text" class="form-control1" id="senha" name="senha" placeholder="" value= "<?php echo $linha1['senha']; ?>" readonly>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="inputCity">Telefone</label>
                                <input type="tel" class="form-control1" id="tel" name="tel" placeholder="(xx) xxxxx-xxxx" value= "<?php echo $linha1['telefone']; ?> " readonly>
                            </div>
                           
                                
                           
                            


                </form>

                        
                        

                

            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../acoes/sair.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

</body>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    


</html>