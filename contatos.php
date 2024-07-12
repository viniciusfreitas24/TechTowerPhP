<?php
// contatos.php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechTower - Entre em Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            margin-bottom: 30px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #contato {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #contato ul {
            list-style-type: none;
            padding: 0;
        }
        #contato ul li {
            margin-bottom: 10px;
        }
        a{
            margin: left;
            padding-left: 25px;
            padding-right: 25px;
        }

        .cont-seta {
            margin-right: auto; /* Isso vai empurrar o elemento para a esquerda */
            margin-left: 20px; /* Para adicionar algum espaço entre a seta e o texto */
            margin-top: -350px; /* Remove o espaçamento superior */       
            font-size: 35px; /* Altere o tamanho conforme necessário */
            color: black; /* Altere para a cor desejada */
}

        .logo {

            position: absolute;
            top: -10px; /* Distância do topo */
            right: 10px; /* Distância da esquerda */
            width: 150px; /* Largura da logo */
            height: auto; /* Altura ajustável */
}

    </style>
</head>
<body>
<a href="home.php" title="" class = "cont-seta">&#8678; </a>

<img src="assets/img/logo.png" alt= "" class="logo">


    <h1>Entre em Contato Conosco</h1>
    <p>Estamos aqui para ouvir você! Entre em contato para qualquer dúvida ou consulta.</p>

    <button onclick="exibirContato()">Entre em Contato</button>

    <div id="contato">
        <p>Para entrar em contato conosco:</p>
        <ul>
            <li>Telefone: <?php echo "+55 (11) 98588-4761"; ?></li>
            <li>Email: <?php echo "techtower@gmail.com"; ?></li>
            <li>Horários de Atendimento: <?php echo "Segunda a Sábado - 08h às 19h"; ?></li>
            <li> <?php echo "Domingo e Feriado - 08h às 14h"; ?></li>
        </ul>
    </div>

    <script>
        function exibirContato() {
            var divContato = document.getElementById('contato');
            if (divContato.style.display === 'none') {
                divContato.style.display = 'block';
            } else {
                divContato.style.display = 'none';
            }
        }
    </script>
</body>
</html>