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
            <h1>Variáveis Referenciadas</h1>
            <h4>Adicionar o parâmetro no final da url: <strong>?a=10</strong></h4>

            <?php
            # Obtenção de variáveis
            $a = $_GET["a"];

            #Série de echo 

            /* Variável não referenciada */
            $b = $a;
            $b += 8;
            echo "<br/>A variável <strong>a</strong> vale $a
            e a variável <strong>b</strong> vale 8 + $a que é = $b<br/>"; //variávle "b" não altera o valor de "a"

            /* Variável Referenciada */
            $b = $a;
            $b = &$a;
            $b += 5;
            echo "<br/>A variável <strong>a</strong> vale $a
            e a variável <strong>b</strong> vale $b"; //A variável "b" por estar referenciada modifica "a"

/*Variáveis de Variáveis*/
$variaveldeorigem = "Variavel_Original";
$$variaveldeorigem = "Variavel_Derivada";// Será criada uma variável chamada Variável_Original que receberá "Variavel_Derivada"

echo "<br/>A variável Variável de Origem é igual a $variaveldeorigem<br/>";
echo "<br/>A variável Variável Original é igual a $Variavel_Original";

            ?>



        </div>
    </body>
    </htlml>