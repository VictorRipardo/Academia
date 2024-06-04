<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="body3">

<section class="vh-100">
  <div class="">
    <div class="row">
      <div class="col-sm-6 px-o d-none d-sm-block">
        <img src="img/login.jpeg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: right; margin: 0px; padding:0px;">
      </div>

      <div class="form col-sm-6 text-black">

        <div class="box-form h-custom-2 px-5 ms-xl-4  pt-xl-0 mt-xl-n5">

          <div class=" div-logo-index px-5 ms-xl-4 ">
            <img src="img/logo.png" class="logo" alt="logo">
          </div>
          

          <form method="POST" class="form1" action="entrar.php"  style="width: 25rem;">
            

            <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre na sua conta </h4>

                  <?php
                    
                    if (isset($_GET['msg']) == 'nao_deu_certo') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>atenção! </strong>Usuario não encontrado!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                             </div>';
                    }else{
                        
                    }
                    if (isset($_GET['msg2']) == 'no_sessao'){ 
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>atenção! </strong>Faça o login!
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>';
                    }
                    if (isset($_GET['mssg']) == 'logout') {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Você se desconctou! </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
                    }else{
                      
                    }
                  ?>    
                
          

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Digite seu email" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="input-login form-control form-control-lg" placeholder="Digite sua senha" />
            </div>
            <div class="row m-3">
              <div data-mdb-input-init class="form-outline mb-4 col-6">
                <input class="form-check-input" type="radio" name="radiopersonal" id="radiopersonal" value="personal" >
                <label class="form-check-label" for="exampleRadios1">
                  Personal
                </label>
              </div>
            
              <div data-mdb-input-init class="form-outline mb-4 col-6">
                <input class="form-check-input" type="radio" name="radioUsuario" id="radioUsuario" value="usuario" >
                <label class="form-check-label" for="exampleRadios1">
                  Usuario
                </label>
              </div>
            </div>
            

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg btn-block" type="submit">Entrar</button>
            </div>

            

          </form>

        </div>

      </div>
      
    </div>
  </div>
</section>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>