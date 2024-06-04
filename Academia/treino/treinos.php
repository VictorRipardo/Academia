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

    <title>Academia Fit - Treinos</title>

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
            <li class="nav-item active">
                <a class="nav-link" href="treinos.php">
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
                    <a class="nav-link" href="cadtreino.php">
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
                <li class="nav-item">
                    <a class="nav-link " href="../personal/cadpersonal.php" >
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
                                                echo '<div class="">'.'<img class="img-profile rounded-circle" src=" '.$linha['foto_personal'].' ">'.'</div> ';
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
                
                 <?php
                            
                        if (isset($_GET['msg2']) == 'treino_cadastrado') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Treino criado com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        }
                    
                    ?>

                <!-- End of Topbar -->
                    <?php
                        
                        if (isset($_GET['msg4']) == 'treino_excluido') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Treino_excluido com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        } if (isset($_GET['msg10']) == 'exercicio_excluido') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Exerico excluido com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        } if (isset($_GET['msg14']) == 'exercicio_editado') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Exercicio editado com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        } if (isset($_GET['msg17']) == 'treino_editado') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Treino editado com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        } if (isset($_GET['msg7']) == 'exercicio_cadastrado') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Exercicio cadastrado com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        }
                    
                    ?>
                

                    <div class="busca w-80 " >
                        
                        <!-- campoSearch -->
                        <form class="d-sm-inline-block form-inline w-100 navbar-search"  method="POST" >
                            <div class="input-group">
                                <input type="text" class="form-control1 form-control bg-light border-2 small" placeholder="Procure um treino"
                                    aria-label="Search" aria-describedby="basic-addon2" name="treino">
                                <div class="input-group-append">
                                    <button class="btn btn-warning" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-12 col-md-12 mb-12">
                        <div class="card border-left-warning shadow h-7 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    
                                    <div class="col mr-2">
                                        
                                        Nome
                                    </div>
                                    <div class="col mr-3">
                                       | Descrição
                                        
                                    </div>
                                    <div class="col mr-2">
                                        | Exercicios
                                    </div>
                                    <div class="col mr-2">
                                        | Editar
                                        
                                    </div>
                                    <div class="col mr-2">
                                        | Excluir
                                        
                                    </div>
                                    
                                        
                                </div>
                             </div>
                        </div>
                    </div>
                    <br>
                    <?php

                        include('../banco.php');

                       if(isset( $_POST['treino'])){
                            $busca = $_POST['treino'];

                            $sql = "SELECT * FROM tbtreino where nome like '%$busca%' ";

                            $resultado = $conexao->query($sql);
                            
                            if ($resultado-> num_rows > 0) {
                                while ($linha1 = $resultado->fetch_array()) {
                                    $treino = $linha1['id_treino'];
                                    echo '    <div class="select col-xl-12 col-md-12 mb-12">';
                                    echo '            <div class="card border-left-warning shadow h-100 py-2">';
                                    echo '                <div class="card-body">';
                                    echo '                    <div class="row no-gutters align-items-center">';
                                    echo '                        <div class="col mr-2">'.$linha1['nome'].'</div>';
                                    echo '                        <div class="col mr-2">'.$linha1['descricao'].'</div>';
                                    echo '                        <div class="col mr-2"><a href="exercicios.php?id='.$linha1['id_treino'].' " '.'><button type="button"  class="btn btn-outline-primary"> Exercicios <i class="bi bi-play"></i></button></a></div>';
                                    echo '                        <div class="col mr-2"><a href="edit_treino.php?id='.$linha1['id_treino'].' " '.'><button type="button"  class="btn btn-outline-success">Editar <i class="fa fa-edit"></i></button></a></div>';
                                    echo '                        <div class="col mr-2"><a href="excluirtreino.php?id='.$linha1['id_treino'].' " '.'><button type="button" class="btn btn-outline-danger">Excluir <i class="fa fa-trash"></i></button></a></div>';
                                    echo '                    </div>';
                                    echo '                </div>';
                                    echo '            </div>';
                                    echo '        </div>';
                                }
                                
                                }else {
                                    echo '<div class=" w-80 alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Treino não encontrado!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                }
                            }
                        
                        
                    ?>
                    

            </div>

                
            
                
            
        </div>
    </div>
    
        <!-- Modal -->
            <div class="modal fade" id="vizualizarExercicio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Exercicio</h1>
                            
                           

                        </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-md-12 mb-12">
                            <div class="card border-left-warning shadow h-7 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            Foto
                                        </div>
                                        <div class="col mr-2">
                                            
                                            Nome
                                        </div>
                                        <div class="col mr-5">
                                            Descrição
                                            
                                        </div>
                                        
                                        <div class="col mr-2">
                                            Editar
                                            
                                        </div>
                                        <div class="col mr-2">
                                            Excluir
                                            
                                        </div>
                                        
                                            
                                    </div>
                                </div>
                            </div>
                        </div>


                                
                        <br>
                        <?php

                            include('../banco.php');

                            
                                

                                $sql = "SELECT * FROM tbexercicio ";

                                $resultado = $conexao->query($sql);
                                
                                if ($resultado-> num_rows > 0) {
                                    while ($linha1 = $resultado->fetch_array()) {
                                        
                                        echo '    <div class="select col-xl-12 col-md-12 mb-12">';
                                        echo '            <div class="card border-left-warning shadow h-100 py-2">';
                                        echo '                <div class="card-body">';
                                        echo '                    <div class="row no-gutters align-items-center">';
                                        echo '                        <div class="">'.'<img class="foto_usu1"src=" ' .$linha1['foto_exercicio'].' ">'.'</div> ';
                                        echo '                        <div class="col mr-2">'.$linha1['nome'].'</div>';
                                        echo '                        <div class="col mr-2">'.$linha1['descricao'].'</div>';
                                        echo '                        <div class="col mr-2"><a href="editexercicio.php?id='.$linha1['id_exercicio'].' " '.'><button type="button"  class="btn btn-outline-success">Editar <i class="fa fa-edit"></i></button></a></div>';
                                        echo '                        <div class="col mr-2"><a href="excluirexercicio.php?id='.$linha1['id_exercicio'].' " '.'><button type="button" class="btn btn-outline-danger">Excluir <i class="fa fa-trash"></i></button></a></div>';
                                        echo '                    </div>';
                                        echo '                </div>';
                                        echo '            </div>';
                                        echo '        </div>';
                                    }
                                    
                                }else {
                                        echo '<div class=" w-80 alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Nenhum exercicio encontrado!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>';
                                    }
                                    
                                
                                


                                ?>
                    </div>
                        
                        
                    <div class="modal-footer">
                        <a class="btn btn-outline-secondary"  data-dismiss="modal">Sair</a>
                        
                        <?php echo '<a href="cadexercicio.php?id='.$treino.' " '.'><button type="button" class="btn btn-outline-success">Adicionar exercicios</button></a>'; ?>
                    </div>
                    </div>
                </div>
            </div>                                         
                </div>
                   
            </div>
        </div>
        <!-- Logout Modal-->
        <div class="modal fade w-100" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">x
                            
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