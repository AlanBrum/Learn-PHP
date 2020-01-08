<! DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Operadores de Atribuição</title>
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
            <h1>Operadores de Atribuição</h1>
            <?php
            echo "Adicionar o parâmetro na url: <strong>?p=16</strong>";

            # Obtenção de variáveis
            $preco = $_GET["p"];

            #Série de echo 
            echo "<br/>O preço do produto é R$" . number_format($preco, 2, ",", ".");

            /*$preco = $preco + ($preco*10/100); */

            $preco += $preco * 10 / 100;  /*Usando operador de Atribuição */

            echo "<br/>O preço do produto com 10% de aumento é: R$: " . number_format($preco, 2); /*vírgula vai vir antes do ponto */

            $preco -= $preco * 10 / 100; /*Usando operador de Atribuição */

            echo "<br/>O preço do produto com desconto de 10% é: R$:" . number_format($preco, 2);




            ?>



        </div>
    </body>
    </htlml>