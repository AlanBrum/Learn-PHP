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

            $variavel_numero = "4 \n "; //Atribuição de valor a variável

            $variavel_numero_int = (int) "100 Não Aparece no HTML \n "; //Só considera o ínicio quando tem número

            $variavel_nome = " \n Essa variável tem o tipo definido pelo PHP"; //Deixando o php definir o tipo string

            $variavel_nome_string = (string) " \n Nome forçado String"; //forçando o php a usar string

            $idade = 25;

            $nome = " \n Alan";

            # Mostrar na tela as diferentes formas de definição de variáveis
            echo nl2br($variavel_numero);

            echo nl2br($variavel_numero_int); //nl2br solta uma linha no php

            echo nl2br($variavel_nome);

            echo nl2br($variavel_nome_string);

            # Concatenação de dados
            echo nl2br($nome . " tem " . $idade . " anos \n ");

            # Ignorar Concatenação de dados e escrever tudo entre aspas
            echo "$nome tem $idade anos";

            # Aspas simples não interpreta variáveis

            echo '\n $nome tem $idade anos';





            ?>
        </div>
    </body>
    </htlml>