<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone 11</title>
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
                <a href= "home.php"> <img src="assets/img/logo.png" alt="DESPERTARTEC" width="150px"></a>
                </div>


                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="home.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="sobre.php" title="">Sobre Nós</a></li>
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
                <img src="assets/produtos/iphone11.webp" alt="" id="produtoImg">


            </div>



            <div class="col-2">
                <h1>Iphone 11</h1>
                <h4>R$ 2999,99 </h4>
                <form action="" method="post">


                    <br>


                    <button class="btn" onclick="adicionarAoCarrinho('Iphone 11', 2999.99)">Adicionar ao Carrinho</button>


                </form>

                <br>
                <br>
                <br>


                <h3>Descrição:</h3>
                <p>64GB | 4GB RAM | Câmera Dupla 12MP+12+10</p>
                   <br>
                   <p>-IPhone 11 64GB Câmera Dupla o sistema operacional iOS. A tela do celular é Liquid Retina HD com 6.1", e resolução HD+. O modelo tem 15.09cm de altura e 7.57cm de largura, com peso de 194.0g.</p> 
                   <br>
                    <p>-O aparelho dispõe de câmera frontal de 12.0 MP, e traseiras de 12.0 + 12.0 MP.</p>
                    <br>
                    <p>-Esse smartphone conta com uma câmera traseira que grava vídeos em 4K, além de conter as tecnologias Câmera Dupla, Flash, Modo Retrato, HDR, Autofoco.</p>
                    <br>
                    <p>-A bateria do Smartphone Apple iPhone 11 64GB Câmera Dupla possui capacidade de 3110mAh.</p>
                    <br>
                    <p>-Com o processador Apple A13 Bionic, este Apple alcança até 1.8GHz, 2.65GHz de capacidade de processamento.</p>
                    <br>
                    <p>-Sua memória RAM do celular é de 4.0GB.</p>
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