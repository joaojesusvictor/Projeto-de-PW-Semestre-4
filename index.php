<?php
require("./php/conexao.php");

if(!isset($_SESSION)) session_start();
    if(isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])){
        $codigo = $_SESSION['cd_cliente'];
        $nome = $_SESSION['nome'];
    }  
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="../Projeto-de-PW-Semestre-4/img/logo2.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Projeto-de-PW-Semestre-4/css/estilo.css">
    <script src="../Projeto-de-PW-Semestre-4/js/scriptFunctions.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

</head>

<body>
    <div class="container" id="containerMenu">
        <div class="p-5 text-white text-center">

            <a href="index.php"><img src="../Projeto-de-PW-Semestre-4/img/logo2.png" class="img-thumbnail" alt="Logo" width="500px" height="500px"></a>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-12" style="margin: auto; padding: 10px;">
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Digite aqui..." id="pesquisarProduto">

                <button class="btn btn-primary" type="button" onclick="Pesquisar()">Procurar</button>
            </form>
        </div>
        <div class="navbar-dark bg-black sticky-top">

            <nav class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top" style="height: 80px;">

                <div class="btn-group" style="margin-left: 75%; position:absolute; ">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="background: local; border: none; ">
                        <img src="../Projeto-de-PW-Semestre-4/img/avatar.png" alt="dropdown image" class="img-responsive rounded-pill" style="width:55px">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <?php if(!isset($_SESSION['cd_cliente'])){?> 
                            <li class="nav-item"><a class="dropdown-item" href="Login.php"><i class="fa fa-user"></i>Entrar</a></li>
                        <?php }else{ ?>
                            <li class="nav-item"><a class="dropdown-item" href="Logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
                        <?php } ?>
                        <li><a class="dropdown-item" href="Register.php">Cadastro</a></li>


                    </ul>
                </div>

                <div class="container-fluid">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="About.php">Sobre</a>
                                </li>

                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6" style="padding-bottom: 25px;">
                <div class="card">

                    <?php

                    $sql = "select * from produtos";

                    $resultado = mysqli_query($conexao, $sql);
                   

                    $resultado = mysqli_query($conexao, $sql);
                    while ($_produtos = mysqli_fetch_assoc($resultado)) { ?>


                        <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/<?php echo $_produtos['nm_img'].".png";?>" alt="Card image">
   

                        <div class="card-body">
                            <h4 class="card-title"> <?php echo $_produtos['titulo']; ?> </h4>
                            <p class="card-text"> <?php echo $_produtos['valor']; ?> </p>
                            <a href="Details.php?id_prod=<?php echo $_produtos['cd_produto']; ?>" class="btn btn-primary">Ver Detalhes</a>
                        </div>


                    <?php } ?>




                </div>
            </div>


        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(11, 94, 215) ">
        <p style="color: white;">© 2022 Copyright: Todos os direitos reservados </p>

    </div>
</body>

</html>



<?php

mysqli_close($conexao);
?>