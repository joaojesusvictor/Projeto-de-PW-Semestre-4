<?php

if (!isset($_SESSION)) session_start();
if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    $codigo = $_SESSION['cd_cliente'];
    $nome = $_SESSION['nome'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sobre Nós</title>
    <link rel="icon" type="image/x-icon" href="../Projeto-de-PW-Semestre-4/img/logo2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../Projeto-de-PW-Semestre-4/js/scriptFunctions.js"></script>
    <!--<link rel="stylesheet" href="../Projeto-de-PW-Semestre-4/css/estilo.css">-->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css" />
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Sobre</title>
</head>

<body>
        <!-- Nova Barra de Navegação-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary border-bottom shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href="Index.php"><strong>Shopping Tecnologia</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse"> 
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php"><i class="fa-solid fa-house fa-1x"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="About.php"><i class="fa-solid fa-users"></i> Sobre</a>
                    </li>
                </ul>
                <div class="align-self-end">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">    
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="background: local; border: none;">
                                    <img src="../Projeto-de-PW-Semestre-4/img/avatar.png" alt="dropdown image" class="img-responsive rounded-pill" style="width:38px">
                                    <span class="caret"></span>
                                </button>
                            
                                <ul class="dropdown-menu">
                                    <?php if (!isset($_SESSION['cd_cliente'])) { ?>
                                        <li class="nav-item"><a class="dropdown-item" href="Login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Entrar</a></li>
                                        <li><a class="dropdown-item" href="Register.php"><i class="fa-solid fa-address-card"></i> Cadastro</a></li>
                                        <?php } else { ?>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="Logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--
    <div class="p-5 text-white text-center">
        <a href="index.php"><img src="../Projeto-de-PW-Semestre-4/img/logo2.png" class="img-thumbnail" alt="Logo" width="500px" height="500px"></a>
    </div>
    -->
    <div class="container " style="text-align: center;">
        <strong><h1 style="text-align: center; color:DodgerBlue;">Programação Web P2</h1></strong>
		<br/>
            <div class="card border-primary">
		<br/>
        <h3 style="text-align: center; color:DodgerBlue;"><strong>Integrantes</strong></h3>
        <br/>
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card border-white">
                        <center><img class="card-img-top" src="../Projeto-de-PW-Semestre-4/equipe/joao.jpeg" alt="Card image" style="width: 140px; height: 140px; border-radius: 50%"></center>                            <div class="card-body">
                                <h4 class="card-title">João Victor de Jesus&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            </div>
                        </div>
                        <br/> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card border-white">
                            <center><img class="card-img-top" src="../Projeto-de-PW-Semestre-4/equipe/arthurw.jpeg" alt="Card image" style="width: 140px; height: 140px; border-radius: 50%"></center>
                            <div class="card-body">
                                <h4 class="card-title">Arthur Soares da Silva</h4>
                            </div>
                        </div>
                        <br/> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card border-white">
                        <center><img class="card-img-top" src="../Projeto-de-PW-Semestre-4/equipe/leonardo.jpeg" alt="Card image" style="width: 140px; height: 140px; border-radius: 50%"></center>                            <div class="card-body">
                                <h4 class="card-title">Leonardo Beserra da Silva</h4>
                            </div>
                        </div>
                        <br/> 
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-white">
                        <center><img class="card-img-top" src="../Projeto-de-PW-Semestre-4/equipe/vinicius.jpeg" alt="Card image" style="width: 140px; height: 140px; border-radius: 50%"></center>                            <div class="card-body">
                                <h4 class="card-title">Vinicius da Silva Cajuí</h4>
                            </div>
                        </div>
                        <br/> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-white">
                        <center><img class="card-img-top" src="../Projeto-de-PW-Semestre-4/equipe/erick.jpeg" alt="Card image" style="width: 140px; height: 140px; border-radius: 50%"></center>                            <div class="card-body">
                                <h4 class="card-title">Erick Rodrigues da Silva</h4>
                            </div>
                        </div>
                        <br/> 
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 col-md-4 col-sm-6">
                            <p class="lead">
                                Projeto do Front-End de um e-commerce de produtos eletronicos, desenvolvido com o intuito de
                                conhecermos e aplicarmos algumas das principais tecnologias utilizadas no ramo como HTML5, CSS, Javascript, PHP e Bootstrap.
                            </p>
                            <a href="index.php"><button type="button" class="btn btn-primary"> Voltar </button></a> 
                        <br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <!--RODAPÉ-->
    <footer class="border-top text-muted bg-primary">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-12 text-center">
                    <strong><h7 style="color: white;">&copy 2022 Shopping Tecnologia - Todos os direitos reservados</h7></strong>
                </div>
            </div>    
        </div>
    </footer>
</body>

</html>