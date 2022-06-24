<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tech's Boys</title>
    <link rel="icon" type="image/x-icon" href="../Projeto-de-PW-Semestre-4/img/logo2.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../Projeto-de-PW-Semestre-4/js/scriptFunctions.js"></script>
    <!--<link rel="stylesheet" href="../Projeto-de-PW-Semestre-4/css/estilo.css">-->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css" />
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

    <header class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center" data-interval="2000">
                 <img src="./img/logo24.png" class="img-fluid d-none d-md-block">
                </div>
                <div class="carousel-item text-center" data-interval="2000">
                <img src="./img/logo24.png" class="img-fluid d-none d-md-block">
                </div>
                <div class="carousel-item text-center" data-interval="2000">
                <img src="./img/logo24.png" class="img-fluid d-none d-md-block">
                </div>
            </div>
        </div>
        </div>
    </header>
    
    <div class="container" id="containerMenu">

        <div class="col-lg-6 col-md-8 col-sm-12" style="margin: auto; padding: 10px;">
            <form class="d-flex" method="POST" action="../Projeto-de-PW-Semestre-4/Search.php">
                <input type="text" class="form-control me-2" placeholder="Digite aqui..."  id="pesquisando" name="pesquisando">
 
                <button class="btn btn-outline-white btn-primary" name="pesquisar"><i class="fa fa-search"></i> <strong>Pesquisar</strong></button>
            </form>
        </div>
        <hr size="1">
    </div>
        <!--<div class="p-5 text-white text-center">
            <a href="index.php"><img src="./img/logo2.png" class="img-thumbnail" alt="Logo" width="500px" height="500px"></a>
        </div>-->