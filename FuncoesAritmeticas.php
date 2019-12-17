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

            echo "<h4>Adicione o código abaixo na URL para atribuir valores para a  e b</h4>";
         
         
            echo "<h3> \?a=16&b=-3 </h3>";

            echo "<h2>Valores recebidos da URl, a = $valor1 e b = $valor2<h2/>";

            echo "O valor absoluto de $valor2 é " . abs($valor2); //abs() = valor absoluto elimina sinal

            echo "<br/>O valor de $valor1<sup>$valor2</sup> é: " . pow($valor1, $valor2); //pow() = potência

            echo "<br/>A raiz quadrada de $valor1 é: " . sqrt($valor1); //sqrt() = raiz quadrada


            #Regras de arredondamento
            echo "<br/>O valor de $valor2 arredondado do round é: " . round($valor2); //round() = segue regra da matemática, até 0.4 para baixo   

            echo "<br/>O valor de $valor2 arredondado do ceil é: " . ceil($valor2);  // sempre arredonda para cima

            echo "<br/>O valor de $valor2 arredondado do floor é: " . floor($valor2);  // sempre arredonda para baixo

            echo "<br/>O parte inteira de $valor2 é: " . intval($valor2);  // pega parte inteira do número

            ?>



        </div>
    </body>
    </htlml>