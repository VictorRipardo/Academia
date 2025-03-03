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

    <title>Academia Fit - cadastro de Treinos</title>

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
                <li class="nav-item active">
                    <a class="nav-link" href="cadtreino.php">
                    <img src="../img/icon/treino.png" alt="treino">
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
                <?php 
                    $id = $_GET['id'];
                    include('../banco.php');

                    $sql = "SELECT * FROM tbexercicio where id_exercicio ='$id' ";

                    $resultado = $conexao->query($sql);
                        
                    if ($resultado-> num_rows > 0) {
                        $linha1 = $resultado->fetch_array();
                                                
                
                            
                    }
                ?>

                <form class="form-cadastro" action="editexercicioSave.php" method="POST" enctype="multipart/form-data">
                            
                            
                    <?php
                    
                        if (isset($_GET['msg2']) == 'usuario_cadastrado') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Usuario cadastrado com sucesso! </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        }
                    
                    ?>

                    <div class="form-group">
                        <h3>cadastre um treino</h3>
                    </div>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="row" style="">

                        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">

                            <div class="row">

                                <div class="col-12">

                                    <?php echo '<img id="output" src=" '.$linha1['foto_exercicio'].'" class="img2 col-10" ></img> '; ?>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <div class="col-12">

                                        <label for="url_foto" class="custom-file-label">Selecione a Foto</label>

                                        <input type="file" accept="image/*" class="form-control custom-file-input in" id="url_foto" name="exercicio" onchange="loadFile(event)">

                                    </div>

                                </div>

                            </div>

                            </div>
                        


                            <div class="form-group flex-column col-9">
                                <div class="form-group col-12">
                                    <label for="inputeNome">Nome do exercicio</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do treino" value= "<?php echo $linha1['nome']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Descanço entre series</label>
                                    <input type="time" class="form-control" id="duracao" name="duracao" value="<?php echo $linha1['descanco_entre_series']; ?>">
                                </div>
                        
                            
                        </div>

                    </div>
                        
                        
                    <div class="form-group ">
                                <label for="inputeNome">Quantidade de series</label>
                                <input type="number" class="form-control" id="series" name="series" placeholder="Insira a quantidade de series" value= "<?php echo $linha1['serie']; ?>">
                            </div>
                            <div class="form-group ">
                                <label for="inputeNome">Quantidade de repetições</label>
                                <input type="number" class="form-control" id="repeticao" name="repeticao" placeholder="Insira a quantidade de repeticoes" value= "<?php echo $linha1['repeticoes']; ?>">
                            </div>
                    <div class="form-group"> 
                        <label for="inputeMsg">Descrição</label>
                        <input type="text" class="form-control" name="desc" id="desc" step="1" value= "<?php echo $linha1['descricao']; ?>">
                        
                    </div> 
                    <div class="form-group">
                
                        <input type="hidden" name="id" value= "<?php echo $_GET['id']; ?>">
                        
                    </div>
                    <div class="form-group2 col-md-6"> 
                        <button type="submit" class="btn btn-warning col-md-6">Cadastrar</button>
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

    <script type="text/javascript">

        var loadFile = function (event) {

            var output = document.getElementById('output');

            output.src = URL.createObjectURL(event.target.files[0]);

        };
    </script>


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