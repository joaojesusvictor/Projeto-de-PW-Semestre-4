<?php 
    require("./php/conexao.php");

    if(isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])){
        if($_SESSION['mudar'] == 0):
            header('Location: index.php');
        endif;
    }  
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro</title>
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

<section>

    <div class="container" id="containerMenu">
        <div class="p-5 text-white text-center">

            <a href="index.php"><img src="../Projeto-de-PW-Semestre-4/img/logo2.png" class="img-thumbnail" alt="Logo" width="500px"

                height="500px"></a>
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
                        <li class="nav-item"><a class="dropdown-item" href="Login.php"><i class="fa fa-user"></i>Entrar</a></li>
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
            </nav>
        </div><br />

        <form id="formCadastro" method="post" action="Register.php">

            <div class="input-group mb-3">
                <span class="input-group-text" >Nome</span>
                <input id="nomeCadastro" name="nomeCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input id="emailCadastro" name="emailCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3" >
                <span class="input-group-text" >Senha</span>
                <input id="senhaCadastro" name="senhaCadastro" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3" >
                <span class="input-group-text" >Confirme a senha</span>
                <input id="confirmaSenha" name="confirmaSenha" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >CPF</span>
                <input id="cpfCadastro" name="cpfCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Telefone</span>
                <input id="telefoneCadastro" name="telefoneCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Cep</span>
                        <input id="cep" name="cep" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12">
                    <button type="button" class="btn btn-primary" style="float: right;" onclick="buscarCep(cep.value);">Buscar Cep</button>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Endereço</span>
                <input id="enderecoCadastro" name="enderecoCadastro" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Número</span>
                <input id="numeroEnd" name="numeroEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Complemento</span>
                <input id="complementoEnd" name="complementoEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Bairro</span>
                <input id="bairroEnd" name="bairroEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Cidade</span>
                <input id="cidadeEnd" name="cidadeEnd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Estado</span>
                <input id="estado" name="estado" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-6">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary" style="float: right; margin-left: 5px;" onclick="validarCpf(cpfCadastro.value); enviarForm();">Salvar</button>
                <button type="button" class="btn btn-danger" style="float: right;" onclick="mudarParaLogin()">Cancelar</button>
            </div>

        </form>
    </div>

    <?php 
        if(isset($_POST["enviar"])) {
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

                $senha = md5($senha);
                $sql = "INSERT INTO clientes (cd_cliente, nome, email, senha, cpf, tel, cep, endereco, numero, complemento, bairro, cidade, estado, mudar) VALUES (Default, '$nome', '$email', '$senha', '$cpf', '$telefone', '$cep', '$endereco', $numeroEnd, '$complementoEnd', '$bairroEnd', '$cidadeEnd', '$estadoEnd', 0)";
                $err = mysqli_query($conexao, $sql);
                $conexao -> close();
        }
    ?>

</section>

    <div class="text-center p-3" style="background-color: rgba(11, 94, 215); margin-top: 25vh; ">
        <p style="color: white;">© 2022 Copyright: Todos os direitos reservados.</p>
    </div>
</body>
</html>