<?php

function isVoter(int $age, string $name): string
{
    return $name . ': ' . ($age > 17  ? 'ESTÁ ' : 'NÃO ') . 'apto a votar';
}

