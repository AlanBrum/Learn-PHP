<! DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Operadores Aritméticos em PHP</title>
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
            <h1>Operadores Aritméticos em PHP</h1>
            <?php


            $n1 = 20;
            $n2 = 4;

            $soma = $n1 + $n2;

            $subtracao = $n1 - $n2;

            // Vai caular a média de forma errada 
            // devido a ordem de precedência dos operadores
            $media_errada = $n1 + $n2 / 2;

            //Cáuculo correto de média 
            //por respeitar ordem precedência dos operadores.
            $media_certa = ($n1 + $n2) / 2;

            $valor_a_da_url = $_GET["a"]; //$_GET usado para pegar valor passado na URL
            $valor_b_da_url = $_GET["b"]; // forma que são passados os valores: ?a=3&b=4



            echo "A divisão entre $n1 e $n2 é igual a " . ($n1 / $n2);

            echo "<br/> A soma entre $n1 e $n2 é igual a $soma";

            echo nl2br("A subtração entre $n1 e $n2 é igual a $subtracao \n");

            echo "A soma de $n1 + $n2 vale " . ($n1 + $n2); //Somando duas variáveis se criar uma outra

            echo "<br/> O módulo vale " . ($n1 % $n2);

            # Ordem de Precedência de Operadores Aritméticos
            # 1º Parênteses ()
            # 2º Multiplicação(*), divisão(/) e módulo(%) o que vier primeiro esquerda para direita
            # 3º Adição e subtração o que vier primeiro, da esquerda para direita

            echo "<br/> O resultado das operações é: " . ((5 + 10) * 20);

            echo "<br/> A média entre $n1 e $n2 não é $media_errada";
            
            echo "<br/> A média correta entre $n1 e $n2 é $media_certa";

            echo "<br/>Adicione esses dados no final da URL,<strong>/?a=3&b=4</strong>, e as variáveis a e b serão prenchidas abaixo";

            echo "<br/> Esse valor veio da URL da página, a = $valor_a_da_url e b = $valor_b_da_url";

            


            ?>
        </div>
    </body>
    </htlml>