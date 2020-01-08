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
            <h1>Incremento de Variáveis</h1>
            <h4>Adicionar o parâmetro no final da url: <strong>?anoatual=2020</strong></h4>

            <?php
            # Obtenção de variáveis
            $anoatual = $_GET["anoatual"];

            #Série de echo 

            /* Usando o Pré-Decremento o valor aparece calculado */
            echo "<br/>O ano atual é $anoatual e o ano anterior é " . --$anoatual;

            /* Usando o Pós-Decremento, 
            a variável recebe o valor 
            mas para que seja mostrado 
            tem que usar o echo novamente*/
            echo "<br/>O ano atual é $anoatual e o ano anterior é " . $anoatual--;

             /* Usando o Pré-Incremento o valor aparece calculado */
             echo "<br/>O ano atual é $anoatual e o próximo ano é " . ++$anoatual;



            ?>



        </div>
    </body>
    </htlml>