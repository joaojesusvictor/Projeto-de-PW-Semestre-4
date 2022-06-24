<?php
require("./php/conexao.php");

if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    header('Location: index.php');
}

if (isset($_POST['senhaLogin'])) {
    $email = $_POST['inputEmail'];
    $senha = $_POST['senhaLogin'];
    $sql = "UPDATE clientes SET senha='$senha' WHERE email='$email'";
    $err = mysqli_query($conexao, $sql);
    echo "<script lang='javascript'>alert('Enviamos sua senha por e-mail!')</script>";
    header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Esqueci a Senha</title>
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

<!-- Signup-->
<section class="login-section" id="login" style="text-align: center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <br/><br/><br/><br/><br/>
                <h3 style="text-align: center; color:#0b84fc;"><strong>Para recuperar sua senha, digite seu e-mail e enviaremos uma nova por lá:</strong></h3><br />
                <form class="col-xs-12 mb-5" id="FormEnviar" action="Esqueci.php?enviar=1" method="POST">
                    <label for="inputEmail">E-mail:</label>
                    <input type="text" name="inputEmail" placeholder="ex: teste@teste.com" id="inputEmail" class="form-control form-control-lg" required>

                    <?php

                    if (isset($_POST['inputEmail'])) {
                        $usuario = $_POST['inputEmail'];
                        $result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' LIMIT 1";
                        $resultado_usuario = mysqli_query($conexao, $result_usuario);
                        $resultado = mysqli_fetch_assoc($resultado_usuario);

                        if (isset($resultado)) {
                            $senha = $resultado['senha'];
                            enviarEmail($usuario, $senha);
                            $conexao->close();

                            echo "<script lang='javascript'>alert('Enviamos sua senha por e-mail!')</script>";
                            echo "<script lang='javascript'>window.location.href = '../Projeto-de-PW-Semestre-4/Login.php'</script>";
                            
                        } else {
                            echo "<script lang='javascript'>alert('E-mail não cadastrado!')</script>";
                        }
                    }
                    ?>
                    <input type="submit" value="Recuperar" class="btn btn-primary col-xs-12 fw mt-3">
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 offset-sm-1 flex-center">
                <div class="">
                <br/><br/><br/><br/><br/><br/>
                <h3 style="text-align: center; color:#0b84fc;"><strong>Ainda não tem cadastro?</strong></h3><br />
                    <a href="Register.php" class="btn btn-primary fw mt-3">
                        Clique aqui
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
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

<?php
function enviarEmail($usuario, $senha)
{
    if (isset($_GET["enviar"])) {
        $assunto = "Nova senha";
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: ProjetoPW <joao_sp_2011@hotmail.com>" . "\r\n";
        $mensagem = "
            <html>
            <h2>Sua senha chegou</h2>

            <p>Para acessar o site, faça login utilizando a sua senha informada abaixo!</p>

            <strong>Senha</strong> = $senha

            </html>";

        mail($usuario, $assunto, $mensagem, $headers);
    }
}
?>