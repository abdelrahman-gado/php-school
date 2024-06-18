<?php

function adder(int|float|string ...$nums) {
    return array_sum($nums);
}

array_shift($argv);
echo adder(...$argv) . PHP_EOL;