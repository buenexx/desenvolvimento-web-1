<?php

$array = [1,2,3,4,5,6,7,8,9,10];

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que dado um array $arr ordenar seus elementos em ordem decrescente.';
echo PHP_EOL. PHP_EOL;

echo 'Escolha 5 valores para o array, após preencher o valor pressione ENTER';
echo PHP_EOL;

$array = [];

for ($i=0; $i < 5; $i++) {
    $array[$i] = readline("Valor: ");
}

function descendingOrder($array) {
    for ($i=1; $i < count($array); $i++) {
        for ($j=0; $j < $i; $j++) {
            if ($array[$i] > $array[$j]) {
                $t = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $t;
            }
        }
    }

    echo 'Segue o resultado em ordem descrescente: ' . implode(', ', $array);
}

descendingOrder($array);
echo PHP_EOL . PHP_EOL;

exit('fim' . PHP_EOL . PHP_EOL);
