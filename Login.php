<?php
require("./php/conexao.php");

//Login
if (!isset($_SESSION)) session_start();

if (isset($_POST['emailLogin']) && isset($_POST['senhaLogin'])) {
    $usuario = $_POST['emailLogin'];
    $senha = $_POST['senhaLogin'];
    include_once('./php/conexao.php');
    $result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado)) {
        $_SESSION['cd_cliente'] = $resultado['cd_cliente'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
    } else {
        echo "<script lang='javascript'>alert('E-mail e/ou senha inválido(s)!')</script>";
    }
}

if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
         header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <link rel="stylesheet" href="./css/estilos.css">

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

    <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-12" id="logar">
        <br/>
        <h3 style="text-align: center; color:#0b84fc;"><strong>Já tenho cadastro!</strong></h3><br />

        <form class="col-lg-12 mb-5" action="Login.php" method="POST">

            <div class="mb-3 row justify-content-md-center">
                <center><label for="emailLogin" class="col-form-label"><strong style="color:#0b84fc;">Email</strong></label></center>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="emailLogin" name="emailLogin" placeholder="Digite aqui o seu email..." required />
                </div>
            </div>
            <div class="mb-3 row justify-content-md-center">
            <center><label for="senhaLogin" class="-form-label"><strong style="color:#0b84fc;">Senha</strong></label></center>
                <div class="col-sm-10">
                    <input type="password" placeholder="Digite aqui a sua senha..." class="form-control" id="senhaLogin" name="senhaLogin" required />
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-left: 80%;">Entrar</button><br /><br />

            <p style="text-align: center; color: blue; cursor: pointer;"><a href="Esqueci.php"><u>Esqueci minha senha</u></a></p>

        </form>

    </div>

    <div class="col-lg-6 col-md-8 col-sm-12" style="margin-top: 30px;">
        <br/><br/><br/><br/>
        <h3 style="text-align: center; color:DodgerBlue;"><strong>Ainda não tenho cadastro!</strong></h3><br />
        <button type="button" class="btn btn-primary" style="margin-left: 40%;" onclick="mudarTela()">Cadastrar</button><br />
        <br /><br />
    </div>
    </div>
    <br/> <br/>
    <br/> <br/>
    <!--RODAPÉ-->
    <footer class="border-top fixed-bottom text-muted bg-primary">
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