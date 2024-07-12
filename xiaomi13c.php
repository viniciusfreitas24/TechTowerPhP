<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiaomi 13C</title>
    <link rel="stylesheet" href="assets/css/verproduto.css">

    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">
</head>


<body>


    <div class="novoMenu">


        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">


            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">


              
                <div class="logo">
                    <a href = "home.php" ><img src="assets/img/logo.png" alt="DESPERTARTEC" width="150px"></a>
                </div>




                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="home.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="sobre.php" title="">Empresa</a></li>
                        <li><a href="contatos.php" title="">Contatos</a></li>
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
                <img src="assets/produtos/xiamoi13c.webp" alt="" id="produtoImg">


            </div>



            <div class="col-2">
                <h1>Xiaomi 13C</h1>
                <h4>R$ 1599,99 </h4>
                <form action="" method="post">


                   <br>


                   <button class="btn" onclick="adicionarAoCarrinho('Redmi Xiaomi 13C', 1599.99)">Adicionar ao Carrinho</button>


                </form>

                <br>
                <br>
                <br>


                <h3>Descrição:</h3>
                <p>128GB | 4GB RAM | Câmera Dupla | Tela 6.74" | Preto</p>
                   <br>
                   <p>-O Smartphone Xiaomi Redmi 13C traz uma impressionante tela de alta definição com 6,74, experiência visual envolvente com taxa de atualização de 90Hz que garante fluidez e suavidade. Ideal para usar apps, jogar e assistir vídeos com qualidade.</p>
                    <br>
                   <p>-Câmera tripla traseira de 50MP com inteligência artificial.
                    Capture fotos incríveis e cheias de detalhes com até 50MP e selfies nítidas com a câmera frontal de 8MP. Fotos impressionantes tanto na frente quanto na traseira aprimoradas por ia.</p>
                    <br>
                    <p>-Processador Octa-core MediaTek Helio G85.
                    Abra aplicativos, jogos e muito mais com velocidade, eficiência e qualidade. Ideal para usuários que buscam um celular ágil e fluido para o dia a dia.</p>
                    <br>
                    <p>-Bateria que dura o dia todo com uma só carga.
                    Com 5000mAh de bateria e suporte para carregamento de 18W, o Redmi 13C acompanha cabo usb-c e carregador 10W na caixa, sendo um smartphone preparado para um dia intenso de uso.</p>
            </div>


        </div>
    </div>

    <br>
    <br>
    <!-- FIM PRODUTOS DETALHES -->


    <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
    
    <!-- FIM TÍTULO PRODUTOS DETALHES -->




    <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
    <div class="corpo-categorias">


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->


        <!-- alter 1.. deixar apenas 1 produto-->
        <div class="linha">


            <!-- INÍCIO ITEM PRODUTO-->


          

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
                        <a href="https://play.google.com/store/games?hl=pt_BR&gl=US"><img src="assets/img/google.png" alt=""></a>
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