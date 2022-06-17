<?php
include_once('./php/conexao.php');
$email = $_SESSION['email'];
if (isset($_POST['inputSenha'])) {

    $senha = $_POST['inputSenha'];

    $senha = md5($senha);
    $sql = "UPDATE clientes SET senha = '$senha', mudar = 0 WHERE email = '$email' ";
    mysqli_query($conexao, $sql);
    $result_usuario = "SELECT * FROM clientes WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $_SESSION['mudar'] = $resultado['mudar'];

    $conexao->close();
}
if ($_SESSION['mudar'] == 0 || !isset($_SESSION['mudar'])) :
    $_SESSION['error'] = "Senha alterada com sucesso!";
    header('Location: index.php');
else :

endif;


?>
<!-- Signup-->
<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-user fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Login</h2>
            </div>
        </div>
    </div>
</section>
<section class="login-section" id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="text-black text-center mb-3 mt-5 col-xs-12">Já tenho cadastro.</h2>
                <form class="col-xs-12 mb-5" action="Mudar.php" method="POST">
                    <label for="inputSenha" class="mt-4">Nova senha:</label>
                    <input type="password" name="inputSenha" id="inputSenha" class="form-control form-control-lg mb-1" required>
                    <input type="submit" value="Mudar" class="btn btn-primary col-xs-12 fw">
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 offset-sm-1 flex-center">
                <div class="">
                    <h2 class="text-black text-center mb-3 mt-5 col-xs-12">Mude sua senha para uma de seu gosto.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php mysqli_close($conexao); ?>