<?php
include_once('./php/conexao.php');

//Login
if (!isset($_SESSION)) session_start();

if (isset($_POST['emailLogin']) && isset($_POST['senhaLogin'])) {
    $usuario = $_POST['emailLogin'];
    $senha = md5($_POST['senhaLogin']);
    include_once('./php/conexao.php');
    $result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado)) {
        $_SESSION['cd_cliente'] = $resultado['cd_cliente'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['mudar'] = $resultado['mudar'];
        echo $_SESSION['email'];
    } else {
        $_SESSION['error'] = "E-mail e/ou senha inválido(s)!";
    }
}

if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    if ($_SESSION['mudar'] == 0) :
        header('Location: index.php');
    else :
        header('Location: Mudar.php');
    endif;
}
?>
<?php require("./php/header2.php"); ?>
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

            <p style="text-align: center; color: blue; cursor: pointer;"><a href="Esqueci.php"><u>Esqueci minha senha</u></a></p>

        </form>

    </div>

    <div class="col-lg-6 col-md-3 col-sm-12" style="margin-top: 30px;">
        <h3 style="text-align: center;">Ainda não tenho cadastro!</h3><br />

        <button type="button" class="btn btn-primary" style="margin-left: 40%;" onclick="mudarTela()">Clique Aqui</button><br />
    </div>

</div>
</div><br /><br />

<?php require("./php/footer.php"); ?>
</body>

</html>