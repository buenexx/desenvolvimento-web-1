<?php

$array = [1,2,3,4,5,6,7,8,9,10];

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que dados dois números inteiros $x e $y positivos, retornar o máximo divisor comum entre eles usando o algoritmo de Euclides.';
echo PHP_EOL;

echo 'Escolha 2 valores. Após preencher cada valor pressione ENTER';
echo PHP_EOL. PHP_EOL;

$array = [];

for ($i=0; $i < 2; $i++) {
    $line = readline("Valor: ");

    readline_add_history($line);

    $array[$i] = $line;
}

function euclidesAlgorithm($array) {
    $result = false;

    if (is_numeric($array[0]) && is_numeric($array[1])) {
        $a = $array[0];
        $b = $array[1];

        if ($b == 0) {
            $result = $a;
        }

        while ($b != 0) {
            $r = $a % $b;
            $a = $b;
            $b = $r;
            $result = $a;
        }
    }

    echo $result ?
        'O máximo divisor comum entre ' . $array[0] . ' e ' . $array[1] . ' é igual a: ' . $result :
        'Não foi identificado os números corretos!!';
}

euclidesAlgorithm($array);
echo PHP_EOL . PHP_EOL;

exit('fim' . PHP_EOL . PHP_EOL);
