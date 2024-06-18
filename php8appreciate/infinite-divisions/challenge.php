<?php

$dividend = (float) $argv[1];
$divisor = (float) $argv[2];

try {
    $result1 = $dividend / $divisor;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage() . "\n";
}

$result2 = fdiv($dividend, $divisor);
echo match($result2) {
    INF => "Infinite\n",
    -INF => "Minus infinite\n",
    default =>  round($result2, 2) . "\n"
};
