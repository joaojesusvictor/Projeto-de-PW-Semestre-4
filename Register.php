<?php
require("./php/conexao.php");

if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    if ($_SESSION['mudar'] == 0) :
        header('Location: index.php');
    endif;
}
?>

<?php require("./php/header2.php"); ?>
<div class="container mt-5">
    <form id="formCadastro" method="post" action="Register.php" style="margin-bottom: 25vh;">

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

    $senha = md5($senha);
    $sql = "INSERT INTO clientes (cd_cliente, nome, email, senha, cpf, tel, cep, endereco, numero, complemento, bairro, cidade, estado, mudar) VALUES (Default, '$nome', '$email', '$senha', '$cpf', '$telefone', '$cep', '$endereco', $numeroEnd, '$complementoEnd', '$bairroEnd', '$cidadeEnd', '$estadoEnd', 0)";
    $err = mysqli_query($conexao, $sql);
    $conexao->close();
}
?>

<?php require("./php/footer.php"); ?>
</body>

</html>