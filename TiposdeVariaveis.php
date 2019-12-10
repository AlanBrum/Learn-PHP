<! DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Tipos de Variáveis em PHP</title>
        <style>
            /* Inclusão do CSS */
            h2 {
                color: #7383d1;
                text-shadow: 1px 1px 1px black;
            }
        </style>
    </head>

    <body>
        <div>
            <!-- tudo dentro da <div> recebe a formatação CSS. -->
            <?php

            $variavel_numero = 4; //Atribuição de valor a variável

            $variavel_numero_int = (int) "100 Não Aparece no HTML"; //Só considera o ínicio quando tem número

            $variavel_nome = "Essa variável tem o tipo definido pelo PHP"; //Deixando o php definir o tipo string

            $variavel_nome_string = (string) "Nome forçado String"; //forçando o php a usar string

            $idade = 25;

            # Mostrar na tela as diferentes formas de definição de variáveis
            echo $variavel_numero;

            echo  $variavel_numero_int;

            echo $variavel_nome;

            echo $variavel_nome_string;

            # Concatenação de dados







            ?>
        </div>
    </body>
    </htlml>