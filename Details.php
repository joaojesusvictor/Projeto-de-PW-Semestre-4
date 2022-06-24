<?php
require("./php/conexao.php");
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['cd_cliente']) && isset($_SESSION['nome'])) {
    $codigo = $_SESSION['cd_cliente'];
    $nome = $_SESSION['nome'];
}
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
                        <li class="nav-item">
                            <a class="nav-link"  data-toggle="modal" data-target="#modalExemplo"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<?php

$cd_produto = $_GET ['id_prod'];
$sql = "SELECT * FROM produtos WHERE cd_produto = '$cd_produto'";


$resultado = mysqli_query($conexao, $sql);
$resultado = mysqli_query($conexao, $sql);
        while ($_produtos = mysqli_fetch_assoc($resultado)) {
?>                                         

   <!-- TUDO QUE ESTÁ NA TELA ESTÁ SENDO MOSTRANDO ABAIXO NA TAG MAIN-->
<main>
    <div class="models-area justify-content-center align-items-center"></div>
        <div class="container mt-4">
            <div class="card border border border-secondary rounded">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12" style="padding-bottom: 10px;">
                        <div class="card border border border-white">
                            <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/<?php echo $_produtos['nm_img'] . ".png"; ?>" alt="Card image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12" style="padding-bottom: 10px;">
                        <div class="card border border border-white">
                            <!--<img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/example2.png" alt="Card image"> -->
                            <div class="card-body">
                            <strong><h4 class="card-title"> <?php echo $_produtos['titulo']; ?>  &nbsp;</h4></strong>
                                <h6 class="card-title"><b>Descrição do Produto</b></h6>
                                <p class="card-text"> <?php echo $_produtos['descritivo']; ?> </p>
                                <h3><b><a href=" " class="text-decoration-none"><?php echo "Valor: R$ " . $_produtos['valor']; ?></a></b></h3>
                                <!-- Botão para acionar modal -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo" onclick="parcela();">
                                        <i class="fa-solid fa-plus"></i> Adicionar ao carrinho
                                    </button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
        <!--<div class="text-center p-4" style="background-color: rgba(11, 94, 215); position: absolute; width: 100%; height: 70px; margin-left: -20px;">
            <p style="color: white;">© 2022 Copyright: Todos os direitos reservados </p>
        </div>-->
    </main>
    <br/> <br/>
    <br/>
    <!--RODAPÉ-->
    <footer class="border-top fixed-bottom text-muted bg-primary">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-12 text-center">
                    <strong><h7 style="color: white;">&copy 2022 Shopping Tecnologia - Copyright: Todos os Direitos reservados.</h7></strong>
                </div>
            </div>    
        </div>
    </footer>

    
    <!-- Modal Carrinho de Compras -->
    <div class="modal fade bd-example-modal-lg" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title w-100" id="exampleModalLabel">
                    <i class="fa-solid fa-cart-shopping"></i> Carrinho</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- <h4>Compras:</h4>
            <hr size='5'>--> 
            <ul class="list-group mb-3">
                 <li class="list-group-item py-3">
                    <div class="row g-3">
                        <div class="col-4 col-md-3 col-lg-2">
                             <a href="#">
                             <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/<?php echo $_produtos['nm_img'] . ".png"; ?>" alt="Card image"> 
                            </a>
                        </div>
                        <div class="col-8 col-md-9 col-lg-7 col-xl-7 text-left align-self-center">
                            <h5><b><a href="#" class="text-decoration-none">
                                <?php echo $_produtos['titulo']; ?> </a></b></h5>

                        </div>
                        <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-med-8 col-lg-3
                            offset-lg-0 col-xl-3 align-self-center mt-3">
                            <div class="input-group">
                                <button id="qtd_menos" type="button" class="btn btn-outline-dark btn-sm" onclick="Menos();">  
                                    <i class="fa-solid fa-caret-down"></i>        
                                </button>
                                <input id="qtd_dado" readonly="readonly" type="text" class="form-control text-center border-dark" value="1">
                                <button id="qtd_mais" type="button" class="btn btn-outline-dark btn-sm" onclick="Mais();">  
                                    <i class="fa-solid fa-caret-up"></i>        
                                </button>
                                <button type="button" class="btn btn-outline-danger border-dark btn-sm" onclick="limpar();">  
                                    <i class="fa-solid fa-trash"></i>        
                                </button>
                            </div>
                            <div class="text-right mt-1">
                                <input type="hidden" id="valor_unit" value="<?php echo $_produtos['valor']; ?>" />
                                <h6 style="color:#0b84fc;"><b>Unidade: R$<?php echo $_produtos['valor']; ?></b></h6>
                                <input type="hidden" id="parcela" value="10"/>
                                <span class="text-dark">Ou em até <b>10x</b> de <br/> <b>R$</b> <input readonly="readonly" id="vl_parcel" value=""/></span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="text-center">
            <h3 style="color:#0b84fc;"><b>Total: R$ <input readonly="readonly" id="vt_total_item" value="<?php echo $_produtos['valor']; ?>"/></b></h3>
        </div> 
            <div class="modal-footer justify-content-center">
                <a href="Index.php" class="btn btn-success btn-lg" onclick="Finalizar();">Comprar</a>
            </div>
        </div>
     </div>
     <?php } ?>
</body>


<!-- JAVASCRIPT DO MODAL - CARRINHO -->
<script>
    //Botão subtrair quantidade
    function Menos(){
        var quantidade = $("#qtd_dado").val();
        var zero = 0;
        if(quantidade > 1){
            var menos = quantidade - 1;
            var tot_sub = $("#qtd_dado").val(menos);
            totalItem();
        }else{
            return false;
        }
    }

    //Botão adicionar quantidade
    function Mais(){
        var quantidade = $("#qtd_dado").val();
        quantidade++;
        var tot_soma = $("#qtd_dado").val(quantidade);

        totalItem();
    }

    //Total do Item Calculado após escolher a quantidade
    function totalItem(){
        var qtd = $("#qtd_dado").val(); // Quantidade Item
        var valor_unit = $("#valor_unit").val(); // Valor Unitário do Item
        var item = $("#vt_total_item").val(); // Valor Total Item

        var total = valor_unit * qtd;

        var resp = $("#vt_total_item").val(total.toFixed(2));
        parcela();
    }

    //Limpa a quantidade do carrinho
    function limpar(){
        var quantidade = $("#qtd_dado").val();
        var limpa = 1;
        var qtd_limpa = $("#qtd_dado").val(limpa);

        totalItem();
        $('#modalExemplo').modal('hide');
    }

    function parcela(){
        var qtd = 10;
        var item = $("#vt_total_item").val(); // Valor Total Item

        var total = item / qtd;

        var parcela =  $("#vl_parcel").val(total.toFixed(2));
    }
</script>
</html>