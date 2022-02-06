<?php

$array = [1,2,3,4,5,6,7,8,9,10];

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que definido um array $arr de n números inteiros, determinar a soma dos números pares.';
echo PHP_EOL. PHP_EOL;

$informNewArray = readline('Deseja informar os valores para o array? [Y/n]: ');
echo PHP_EOL;

if ($informNewArray === 'Y' || $informNewArray === 'y') {
    echo 'Escolha 5 valores para o array, após preencher o valor pressione ENTER';
    echo PHP_EOL. PHP_EOL;

    $array = [];

    for ($i=0; $i < 5; $i++) {
        $array[$i] = readline("Valor: ");
    }

} else {
    echo ' Você não pressionou as teclas Y ou y, logo será executado o algoritmo com  a soma dos números pares do seguinte array: [1,2,3,4,5,6,7,8,9, 10]';
    echo PHP_EOL. PHP_EOL;
}

function sumOnlyPairNumbers($array) {
    $result = 0;

    foreach ($array as $item) {
        $result += is_numeric($item) && $item % 2 === 0 ? $item : 0;
    }

    echo $result > 0 ? 'A soma dos números pares é igual: ' . $result : 'Não foi encontrado nenhum número par!!';
}

sumOnlyPairNumbers($array);
echo PHP_EOL . PHP_EOL;

exit('fim' . PHP_EOL . PHP_EOL);
