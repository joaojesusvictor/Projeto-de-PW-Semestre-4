<?php
require("./php/conexao.php");

if (!isset($_SESSION)) session_start();
if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    $codigo = $_SESSION['cd_cliente'];
    $nome = $_SESSION['nome'];
}
?>

<?php require("./php/header.php"); ?>

<div class="container mt-5">
    <div class="row">
        <?php

        $sql = "select * from produtos";

        $resultado = mysqli_query($conexao, $sql);

        while ($_produtos = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
			
                <div class="card" style="height: 95%;">
				
					<div class="card-header" style="background-color: white; height: 100%;">
						<a href="Details.php?id_prod=<?php echo $_produtos['cd_produto']; ?>">
							<img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/<?php echo $_produtos['nm_img'] . ".png"; ?>" alt="Foto do produto não disponível">
						</a>
						<div class="card-text text-center">
							<br>
							<a href="Details.php?id_prod=<?php echo $_produtos['cd_produto']; ?>">
								<h4 class="card-title" style="height: calc(4vw + 3vh); font-size: calc(25% + 0.5vw + 1.5vh); color:black;"> <?php echo $_produtos['titulo']; ?>&nbsp;</h4>
							</a>
						
							<a href="Details.php?id_prod=<?php echo $_produtos['cd_produto']; ?>">
								<p style="font-size: calc(40% + 1vw + 1vh); color: DodgerBlue; font-weight: bold;"> <?php echo "R$ " . $_produtos['valor']; ?> </p>
							</a>
						</div>
					</div>
                </div>
				
                <br/> 
            </div>

        <?php } ?>
    </div>
</div>
<br/>
<?php require("./php/footer.php"); ?>
</body>

</html>
<?php
mysqli_close($conexao);
?>