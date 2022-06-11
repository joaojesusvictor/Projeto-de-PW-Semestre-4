<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../Projeto-de-PW-Semestre-4/img/logo2.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Projeto-de-PW-Semestre-4/js/scriptFunctions.js"></script>
    <!--<link rel="stylesheet" href="../Projeto-de-PW-Semestre-4/css/estilo.css">-->

</head>

<body>

    <!-- Modelos para clonagem e inclusão na área de exibição -->
    <div class="models">
        <div class="models-item">

                
            <a href="">
                <div class="models-item--img"><img src="" /></div>
                <div class="models-item--add">Ver Detalhes</div>
            </a>
            <div class="models-item--price">R$ --</div>
            <div class="models-item--name">--</div>
            <div class="models-item--desc">--</div>
        </div>
        
        <div class="cart--item" >
            

            <img src="" />
            <div class="cart--item-nome">--</div>
            
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
            
        </div>
        
    </div>
    <header>
        <div class="menu-openner">
            <span></span>
            <span class="material-icons">shopping_cart</span>
            
        </div>
    </header>
    <!-- TUDO QUE ESTÁ NA TELA ESTÁ SENDO MOSTRANDO ABAIXO NA TAG MAIN-->
    <main>
        <div class="container" id="containerMenu">

            <div class="navbar-dark bg-black sticky-top">

                <nav class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top" style="height: 100px;">

                    <div class="p-4 text-white text-center" style=" position:absolute;" >
                        <a href="index.html"><img src="../Projeto-de-PW-Semestre-4/img/logo2.png" class="img-thumbnail"
                                alt="Logo" width="180px" height="100px"></a>
                    </div>

                    <div class="btn-group" style="margin-left: 75%; position:absolute;">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false" style="background: local; border: none;">
                            <img src="../Projeto-de-PW-Semestre-4/img/avatar.png" alt="dropdown image"
                                class="img-responsive rounded-pill" style="width:55px">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="Login.html">Login</a></li>
                            <li><a class="dropdown-item" href="Login.html">Cadastro</a></li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <div class="models-area"></div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" style="padding-bottom: 25px;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Samsung Galaxy S20</h4>
                        </div>
                        <img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/example1.png" alt="Card image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding-bottom: 25px;">
                    <div class="card">
                        <!--<img class="card-img-top" src="../Projeto-de-PW-Semestre-4/img/example2.png" alt="Card image"> -->
                        <div class="card-body">
                            <h4 class="card-title">Descrição do Produto:</h4>
                            <p class="card-text">Tudo que você quer, para fazer tudo que ama. O Galaxy S20 FE
                                é o smartphone para pessoas que querem tudo. Ouvimos vocês, os fãs, e agora não precisam
                                mais ficar em dúvida sobre o que escolher. Este é o smartphone feito sob medida para fãs
                                de todos os tipos. Desenvolvido com tudo o que vocês mais queriam em um smartphone.
                                Então, se você é fã de fotografia, jogos ou adora deixar seu feed repleto de tudo
                                o que o inspira, nós reunimos a combinação definitiva de inovação S20.</p>

                            <p class="card-text">O smartphone Galaxy S20 FE oferece o que você deseja, para fazer mais
                                daquilo que você ama.
                                Atualize sua visualização. A tela infinita Full HD+ de 6.5" tem quase nenhuma moldura
                                ao redor das bordas planas e um orifício pequeno para a câmera.
                                Isso significa uma tela mais envolvente que torna seus jogos,
                                streaming e videochamadas muito mais divertidos.</p>

                            <div class="form-floating">
                                <select class="form-select" id="sel1" name="sellist">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <label for="sel1" class="form-label">Escolha a Quantidade</label>
                            </div>
                            <br />
                            <h3 class="card-title">Valor: R$ 2.000,00</h3>
                            <div class="modelsInfo--addButton">Adicionar ao carrinho</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-4" style="background-color: rgba(11, 94, 215); position: absolute; width: 100%; height: 70px; margin-left: -20px;">
            <p style="color: white;">© 2022 Copyright: Todos os direitos reservados </p>
        </div>
    </main>
    
    <aside>
        <div class="cart--area">
            <div class="menu-closer">
                <span class="material-icons">close</span>
            </div>
            <br /><br /><br /><br /><br />
            <center>
                <span class="material-icons">shopping_cart</span><h1>Carrinho</h1>
            </center>
            <br>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto (-10%)</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar" onclick="Finalizar();">Finalizar a compra</div>
            </div>
        </div>
    </aside>

    <!-- Será utilizada futuramente -->
    <div class="modelsWindowArea">
        <div class="modelsWindowBody">
            <div class="modelsInfo--cancelMobileButton">Voltar</div>
            <div class="modelsBig">
                <img src="" />
            </div>
            <div class="modelsInfo">
                <h1>--</h1>
                <div class="modelsInfo--desc">--</div>
                <div class="modelsInfo--sizearea">
                    <div class="modelsInfo--sector">Opções</div>
                    <div class="modelsInfo--sizes">
                        <div data-key="0" class="modelsInfo--size">Celular<span>--</span></div>
                        <div data-key="1" class="modelsInfo--size">+SmartWatch<span>--</span></div>
                        <div data-key="2" class="modelsInfo--size selected">+Airpods<span>--</span></div>
                    </div>
                </div>
                <div class="modelsInfo--pricearea">
                    <div class="modelsInfo--sector">Preço</div>
                    <div class="modelsInfo--price">
                        <div class="modelsInfo--actualPrice">R$ --</div>
                        <div class="modelsInfo--qtarea">
                            <button class="modelsInfo--qtmenos">-</button>
                            <div class="modelsInfo--qt">1</div>
                            <button class="modelsInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="modelsInfo--addButton">Adicionar ao carrinho</div>
                <div class="modelsInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/models.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    
</body>

</html>