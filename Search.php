<?php



if (!isset($_SESSION)) session_start();
if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    $codigo = $_SESSION['cd_cliente'];
    $nome = $_SESSION['nome'];
}
require("./php/header.php");

?>
<div class="container mt-5">
    <div class="row">
<?php
if (isset($_POST["pesquisar"])){
    require("./php/conexao.php");
    $titulo = $_POST["pesquisando"];


    $sqlpesquisa = "SELECT * FROM `produtos` WHERE titulo like '%$titulo%' ";
    
    $resultado = mysqli_query($conexao, $sqlpesquisa);

    while ($_pesquisados = mysqli_fetch_assoc($resultado)) {
?>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card">
            <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/<?php echo $_pesquisados['nm_img'] . ".png"; ?>" alt="Card image">
            <div class="card-body">
                <h4 class="card-title"> <?php echo $_pesquisados['titulo']; ?> </h4>
                <p class="card-text"> <?php echo "R$ " . $_pesquisados['valor']; ?> </p>
                <a href="Details.php?id_prod=<?php echo $_pesquisados['cd_produto']; ?>" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>



<?php } ?>


<?php require("./php/footer.php"); ?>
</body>

</html>



