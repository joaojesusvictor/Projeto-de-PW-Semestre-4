<?php 
include_once('./php/conexao.php');

//Login

if(!isset($_SESSION)) session_start();
    
if(isset($_POST['emailLogin']) && isset($_POST['senhaLogin'])){
    $usuario = $_POST['emailLogin'];
    $senha = md5($_POST['senhaLogin']);
    include_once('./php/conexao.php');
    $result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    
    if(isset($resultado)){
        $_SESSION['cd_cliente'] = $resultado['cd_cliente'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['mudar'] = $resultado['mudar'];
        echo $_SESSION['email'];
    }else{	
        $_SESSION['error'] = "E-mail e/ou senha inválido(s)!";
    }
}

if(isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])){
    if($_SESSION['mudar'] == 0):
        header('Location: index.php');
    else:
        header('Location: Mudar.php');
    endif;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="../Projeto-de-PW-Semestre-4/img/logo2.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Projeto-de-PW-Semestre-4/css/estilo.css">
    <script src="../Projeto-de-PW-Semestre-4/js/scriptFunctions.js"></script>
</head>

<body>
    <div class="container" id="containerMenu">
        <div class="p-5 text-white text-center">

            <a href="index.php"><img src="../Projeto-de-PW-Semestre-4/img/logo2.png" class="img-thumbnail" alt="Logo"
                    width="500px" height="500px">
            </a>
        </div>

        <div class="navbar-dark bg-black sticky-top">

            <nav class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top" style="height: 80px;">

                <div class="btn-group" style="margin-left: 75%; position:absolute;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" style="background: local; border: none;">
                        <img src="../Projeto-de-PW-Semestre-4/img/avatar.png" alt="dropdown image"
                            class="img-responsive rounded-pill" style="width:55px">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#">Perfil</a></li>

                    </ul>
                </div>

                <div class="container-fluid">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../Projeto-de-PW-Semestre-4/index.php">Inicio</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div><br />

        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12" id="logar">
                <h3 style="text-align: center;">Já tenho cadastro!</h3><br />

                <form class="col-xs-12 mb-5" action="Login.php" method="POST">

                    <div class="mb-3 row">
                        <label for="emailLogin" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="emailLogin" name="emailLogin" placeholder="Digite aqui" required />
                        </div><br /><br />

                        <label for="senhaLogin" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" required />
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-left: 80%;">Entrar</button><br /><br />
                
                    <p style="text-align: center; color: blue; cursor: pointer;"><a href="Esqueci.php" ><u>Esqueci minha senha</u></a></p>

                </form>

            </div>

            <div class="col-lg-6 col-md-3 col-sm-12" style="margin-top: 30px;">
                <h3 style="text-align: center;">Ainda não tenho cadastro!</h3><br />

                <button type="button" class="btn btn-primary" style="margin-left: 40%;" onclick="mudarTela()">Clique Aqui</button><br />
            </div>

        </div>
    </div><br /><br />

    <footer>
        <div class="text-center p-3" style="background-color: rgba(11, 94, 215); margin-top: 10vh;">
            <p style="color: white;">© 2022 Copyright: Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>