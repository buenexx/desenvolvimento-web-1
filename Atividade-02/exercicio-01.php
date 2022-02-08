<?php

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que definidas duas matrizes quadradas $a e $b, de mesmo tamanho, efetue a multiplicação dessas matrizes.';
echo PHP_EOL. PHP_EOL;

$matrixA = [
    [2, 4],
    [4, 2]
];

$matrixB = [
    [10, 20],
    [20, 10]
];

$resultMatrix = [];

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matrixA[$i][$j] . ' x ' . $matrixB[$i][$j] . ' = ' . $matrixA[$i][$j] * $matrixB[$i][$j] .PHP_EOL;
        $resultMatrix[$i][$j] = $matrixA[$i][$j] * $matrixB[$i][$j];
    }
}

echo PHP_EOL;
echo 'Resultado da multiplicação das matrizes: ';
echo PHP_EOL;

foreach ($resultMatrix as $items) {
    echo '[';

    foreach ($items as $key => $item) {
        echo $item . ($key > 0 ? '' : ', ');
    }

    echo ']' .PHP_EOL;
}

echo PHP_EOL . PHP_EOL;

exit('fim' . PHP_EOL . PHP_EOL);
