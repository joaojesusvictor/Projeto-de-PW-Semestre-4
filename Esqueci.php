<?php 
    include_once('./php/conexao.php');

    if(isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])){
        header('Location: index.php');
    }

    if(isset($_POST['senhaLogin'])){
        $email = $_POST['inputEmail'];
        $senha = $_POST['senhaLogin'];
        $senha = md5($senha);
        $sql = "UPDATE clientes SET senha='$senha' WHERE email='$email'";
        $err = mysqli_query($conexao, $sql);
        $_SESSION['error'] = "Enviamos sua senha por e-mail!";
        header('Location: Login.php');
    }
    
?>
<!-- Signup-->
<section class="signup-section" id="signup" style="background-image: url('assets/img/dark-polygonal-background_1409-878.jpg')">
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
                <h2 class="text-black text-center mb-3 mt-5 col-xs-12">Para recuperar sua senha, digite seu e-mail e enviaremos uma nova por lá:</h2>
                <form class="col-xs-12 mb-5" action="Esqueci.php" method="POST">
                    <label for="inputEmail">E-mail:</label>
                    <input type="text" name="inputEmail" placeholder="ex: teste@teste.com" id="inputEmail" class="form-control form-control-lg" required>
                    
                    <?php
                        if(isset($_POST['inputEmail'])){
                            $usuario = $_POST['inputEmail'];
                            $result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' LIMIT 1";
                            $resultado_usuario = mysqli_query($conexao, $result_usuario);
                            $resultado = mysqli_fetch_assoc($resultado_usuario);
                            
                            if(isset($resultado)){
                                $n=10; 
                                function getName($n) { 
                                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                                    $randomString = ''; 
                                
                                    for ($i = 0; $i < $n; $i++) { 
                                        $index = rand(0, strlen($characters) - 1); 
                                        $randomString .= $characters[$index]; 
                                    } 
                                
                                    return $randomString; 
                                } 

                                $senha = getName($n);
                                enviarEmail($usuario, $senha);
                                echo $senha .' ';
                                $senha = md5($senha);
                                $sql = "UPDATE clientes SET senha = '$senha', mudar = 1 WHERE email = '$usuario' ";
                                mysqli_query($conexao, $sql);
                                $conexao -> close();
                                header('Location: Login.php');
                            }else{
                                $_SESSION['error'] = "E-mail não cadastrado!";
                            }
                        }
                    ?>
                    <input type="submit" value="Recuperar" class="btn btn-primary col-xs-12 fw mt-3">
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 offset-sm-1 flex-center">
                <div class="">
                    <h2 class="text-black text-center mb-3 mt-5 col-xs-12">Ainda não tenho cadastro?</h2>
                    <a href="Register.php" class="btn btn-primary fw mt-3">
                        Clique aqui
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>  

<?php
function enviarEmail($usuario, $senha) {
    $assunto = "Nova senha";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ProjetoPW';
    $mensagem = "
        <html>
        <h2>Sua nova senha chegou</h2>

        <p>Para acessar o site, faça login utilizando a nova senha informada abaixo!</p>

        <strong>Senha</strong> = $senha

        <p>Apos efetuar o login, informe a nova senha que deseja utilizar</p>

        </html>";
        
        mail($usuario, $assunto, $mensagem, $headers);
}
?>