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

       echo nl2br("A soma entre $n1 e $n2 é igual a $soma \n");
       
       echo "A subtração entre $n1 e $n2 é igual a $subtracao";
       
       ?>
        </div>
    </body>
    </htlml>