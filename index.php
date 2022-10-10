<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Parcela +</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" href="./img/favicon.ico"/>
</head>
<body>

    
    
    <?php
        //VALOR DA COMPRA
        $valor_total = 7;
        
        //QUANTIDADE DE PARCELAS
        $quantidade_parc = 3;

        //imprime na tela, Converte o valor para o formato real separado pela virgula
        echo "Valor da compra: " . number_format($valor_total, 2, ',', '.') . "<br>";
    
        //Imprime a quantidade de parcelas
        echo "Quantidade de parcelas: $quantidade_parc <br><br>";

        //Calcular o valor de cada parcela
        $valor_parc = $valor_total / $quantidade_parc;

        //Variavel para controlar o while
        $controle = 1;

        //Laço de repetição para imprimir o valor das parcelas
        while($controle <= $quantidade_parc){

            echo "Valor da parcela " .  number_format($valor_parc, 2, ',', '.') . "<br>";

            //Incrementa a variavel após imprimir a parcela
            $controle++;

            $soma_valor_parc = 0;

            //Soma o valor das parcelas
            $soma_valor_parc += number_format($valor_parc, 2, '.', '');

            //Imprime o valor total da soma das parcelas e converte para o formato real separado pela virgula
            echo "<br>Valor total parcelado: " .number_format($soma_valor_parc, 2, ',', '.');
        }


    ?>


	
	<script src="./js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    10/10/2022
-->