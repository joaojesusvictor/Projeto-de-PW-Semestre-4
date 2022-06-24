<?php
require("./php/conexao.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Details</title>
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
                                    <!--<li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a></li>-->
                                    <?php if (!isset($_SESSION['cd_cliente'])) { ?>
                                        <li class="nav-item"><a class="dropdown-item" href="Login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Entrar</a></li>
                                        <?php } else { ?>
                                    <li class="nav-item"><a class="dropdown-item" href="Logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
                                    <?php } ?>
                                    <li><a class="dropdown-item" href="Register.php"><i class="fa-solid fa-address-card"></i> Cadastro</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<div class="container mt-5">
    <form id="formCadastro" method="post" action="Register.php?enviar=1" style="margin-bottom: 25vh;">

        <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input id="nomeCadastro" name="nomeCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Email</span>
            <input id="emailCadastro" name="emailCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Senha</span>
            <input id="senhaCadastro" name="senhaCadastro" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Confirme a senha</span>
            <input id="confirmaSenha" name="confirmaSenha" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">CPF</span>
            <input id="cpfCadastro" name="cpfCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Telefone</span>
            <input id="telefoneCadastro" name="telefoneCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3">
                    <span class="input-group-text">Cep</span>
                    <input id="cep" name="cep" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-12">
                <button type="button" class="btn btn-primary" style="float: right;" onclick="buscarCep(cep.value);">Buscar Cep</button>
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Endereço</span>
            <input id="enderecoCadastro" name="enderecoCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Número</span>
            <input id="numeroEnd" name="numeroEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Complemento</span>
            <input id="complementoEnd" name="complementoEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Bairro</span>
            <input id="bairroEnd" name="bairroEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Cidade</span>
            <input id="cidadeEnd" name="cidadeEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Estado</span>
            <input id="estado" name="estado" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group col-lg-12 col-md-12 col-sm-6">
            <button type="submit" id="enviar" name="enviar" class="btn btn-primary" style="float: right; margin-left: 5px;" onclick="validarCpf(cpfCadastro.value); enviarForm();">Salvar</button>
            <button type="button" class="btn btn-danger" style="float: right;" onclick="mudarParaLogin()">Cancelar</button>
        </div>

    </form>
</div>

<br/><br/><br/><br/>
    <!--RODAPÉ-->
    <footer class="border-top  text-muted bg-primary">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-12 text-center">
                        <strong><h7 style="color: white;">&copy 2022 Shopping Tecnologia - Copyright: Todos os Direitos reservados.</h7></strong>
                    </div>
                </div>    
            </div>
        </footer>
</body>

</html>

<?php
if (isset($_POST["enviar"])) {
    $nome = $_POST['nomeCadastro'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['senhaCadastro'];
    $confirma = $_POST['confirmaSenha'];
    $cpf = $_POST['cpfCadastro'];
    $telefone = $_POST['telefoneCadastro'];
    $cep = $_POST['cep'];
    $endereco = $_POST['enderecoCadastro'];
    $numeroEnd = $_POST['numeroEnd'];
    $complementoEnd = $_POST['complementoEnd'];
    $bairroEnd = $_POST['bairroEnd'];
    $cidadeEnd = $_POST['cidadeEnd'];
    $estadoEnd = $_POST['estado'];

    include_once('./php/conexao.php');
    $result_usuario = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado['email']) != $email) {
        $sql = "INSERT INTO clientes (cd_cliente, nome, email, senha, cpf, tel, cep, endereco, numero, complemento, bairro, cidade, estado) VALUES (Default, '$nome', '$email', '$senha', '$cpf', '$telefone', '$cep', '$endereco', $numeroEnd, '$complementoEnd', '$bairroEnd', '$cidadeEnd', '$estadoEnd')";
        $err = mysqli_query($conexao, $sql);
    }else{
        echo "<script lang='javascript'>alert('Já existe um cadastro com esse email!')</script>";
    }
    $conexao->close();
}
?>