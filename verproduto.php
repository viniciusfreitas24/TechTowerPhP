<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="assets/css/verproduto.css">

    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">
</head>


<body>


    <div class="novoMenu">


        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">


            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">


              


                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="home.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="#" title="">Empresa</a></li>
                        <li><a href="#" title="">Contatos</a></li>
                    </ul>
                </nav>
                <!-- FIM   MENU NAVEGAÇÃO -->


                <a href="carrinho.php" title="">
                    <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">
                    <img src = "assets/img/menu.png" alt = "" class = "menu-celular" onclick = "menucelular()">
                </a>



            </div>
            <!-- FIM NAVEGAÇÃO-->


        </div>
        <!-- FIM DO CONTEÚDO-->
        <hr>
        <br>
    </div>


    <!-- INÍCIO PRODUTOS DETALHES alter 4 incluir esta classe -->
    <div class="corpo-categorias ver-produto">
        <div class="linha">


            <div class="col-2">
                <img src="assets/produtos/galaxys23fe.webp" alt="" id="produtoImg">


            </div>



            <div class="col-2">
                <p>Skate Campeões 2022</p>
                <h1>Compre com desconto</h1>
                <h4>R$ 777,00 </h4>
                <form action="" method="post">


                    <select name="" id="">
                        <option value="">Selecione o Tamanho</option>
                        <option value="">Versão Kids</option>
                        <option value="">Teenager</option>
                        <option value="">Adulto</option>
                        <option value="">Profissional</option>
                    </select>
                    <br>
                    <input type="number" name="" id="" value="1">


                    <button type="submit" class="btn">Adicionar ao Carrinho</button>


                </form>

                <br>
                <br>
                <br>


                <h3>Descrição:</h3>
                <p>hidhsa dsadhiasod asdshaido dsahdioas</p>
            </div>


        </div>
    </div>

    <br>
    <br>
    <!-- FIM PRODUTOS DETALHES -->


    <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
    <div class="corpo-categorias">
        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <br>
            <br>
            <br>
            <p>Veja Mais</p>
            


        </div>
    </div>
    <!-- FIM TÍTULO PRODUTOS DETALHES -->




    <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
    <div class="corpo-categorias">


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->


        <!-- alter 1.. deixar apenas 1 produto-->
        <div class="linha">


            <!-- INÍCIO ITEM PRODUTO-->


            <div class="col-4">

                <img src="assets/img/produto-10.jpg" alt="">


                <h4>Relógio Treino Profissional Sun</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>


                <p>R$ 4090,90</p>




            </div>


            <div class="col-4">
                <img src="assets/img/produto-9.jpg" alt="">

                <h4>Fones de Ouvido Sem Fio </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 788,90</p>

            </div>


            <div class="col-4">
                <img src="assets/img/produto-7.jpg" alt="">

                <h4>Meia Treino Profissional</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 197,00</p>


            </div>


            <!-- FIM ITEM PRODUTO-->


            <!-- FIM ITEM PRODUTO-->




        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->


    </div>
    <!-- FIM PRODUTOS EM DESTAQUE alter 3 -- retirar paginação -->






    <!-- INÍCIO RODAPÉ-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">


                <div class="rodape-col-1">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                       <a href="https://play.google.com/store/games?hl=pt_BR&gl=US"> <img src="assets/img/google.png" alt=""></a>
                        <a href="https://www.apple.com/br/store"><img src="assets/img/apple.png" alt=""></a>
                    </div>
                </div>


                <div class="rodape-col-2">
                    <img src="assets/img/logo-2.png" alt="">
                    <p>Desenvolvido com amor pela tecnologia </p>
                </div>
                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons </li>
                        <li>Blog </li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>




                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook </li>
                        <li>Instagram </li>
                        <li>Youtube</li>
                        <li>Twiter</li>
                    </ul>
                </div>


            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. TECHTOWER 2024.
            </p>


        </div>


    </footer>
    <!-- FIM RODAPÉ-->


    
        
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>

<script>
        
    function adicionarAoCarrinho(name, price) {
        const pedido = {
            nome: name,
            preco: price,
        };

        // Armazenar os dados do pedido em localStorage
        let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
        pedidos.push(pedido);
        localStorage.setItem('pedidos', JSON.stringify(pedidos));

        // Redirecionar para a página do carrinho
        window.location.href = 'carrinho.php';
    }
    </script>


</html>