<! DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Funções Aritméticas em PHP</title>
        <style>
            /* Inclusão do CSS */
            h2 {
                font: 15pt Arial;
                color: yellowgreen;
                text-shadow: 1px 1px 1px yellow;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Funções Aritméticas em PHP</h1>
            <?php

            # Obtenção de variáveis
            $valor1 = $_GET["a"];
            $valor2 = $_GET["b"];

            echo "<h4>Adicione este código na URL,<strong> \?a=1&b=-3</strong>, para atribuir valores para a  e b</h4>";



            echo "<h2>Valores recebidos da URl, a = $valor1 e b = $valor2<h2/>";
            
            echo "O valor absoluto de $valor2 é ". abs($valor2);
            
            ?>

        </div>
    </body>
    </htlml>