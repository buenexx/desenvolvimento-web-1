<?php

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que abra o arquivo numeros.txt coloque os números desse arquivo em um array. Percorra o array e some todos os valores.';
echo PHP_EOL. PHP_EOL;

$content = file_get_contents('prime-numbers.txt');
$numbers = explode(',' , $content);
$result = 0;

foreach($numbers as $number){
    $result = $result + (int)$number;
}

echo 'A soma dos primeiros 20 números primos é igual a: ' . $result;

echo PHP_EOL. PHP_EOL;
exit('fim' . PHP_EOL . PHP_EOL);
