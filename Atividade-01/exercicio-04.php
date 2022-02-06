<?php

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que dado um array $arr contendo um número na base binária, transformá-lo para a base decimal.';
echo PHP_EOL;

echo 'Insira uma sequência binária. Exemplo: 1110001';
echo PHP_EOL. PHP_EOL;

$line = readline("Valor: ");

function binaryToNumeric($val) {
    $array = str_split($val);
    $size = count($array);
    $invalidCharacter =false;
    $potency = $size;
    $result = 0;

    foreach ($array as $item) {
        if (!is_numeric($item)) {
            $invalidCharacter  = true;
            break;
        }

        $potency--;
        $result += ($item * 2) ** $potency;
    }

    echo $invalidCharacter ?
        'O valor inserido deve ser binário!!' :
        'O valor ' . $val . ' em binário é equivalente ao número ' . $result . ' em decimal.';
}

binaryToNumeric($line);
echo PHP_EOL . PHP_EOL;

exit('fim' . PHP_EOL . PHP_EOL);
