<?php

echo PHP_EOL. PHP_EOL;
echo 'Crie um código em PHP que abra e preencha um arquivo numeros.txt com os 20 primeiros números primos.';
echo PHP_EOL. PHP_EOL;

$count = 0 ;
$number = 2 ;
$array = [];

while ($count < 20 ) {
    $div_count = 0;
    for ($i = 1; $i <= $number; $i++) {
        if (($number % $i) == 0) {
            $div_count++;
        }
    }

    if ($div_count < 3) {
        $array[$count] = $number;
        $count++;
    }

    $number++;
}

$file = fopen('prime-numbers.txt', 'w');
fwrite($file, implode(',', $array));
fclose($file);

exit('fim' . PHP_EOL . PHP_EOL);
