<?php
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    $codigo = $_SESSION['cd_cliente'];
    $nome = $_SESSION['nome'];
}
?>
<?php require("./php/header.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6" style="padding-bottom: 25px;">
            <div class="card">
                <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/example1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Samsumg Galaxy S20</h4>
                    <p class="card-text">R$2.000,00</p>
                    <a href="../Projeto-de-PW-Semestre-4/Details.php" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("./php/footer.php"); ?>
</body>

</html>