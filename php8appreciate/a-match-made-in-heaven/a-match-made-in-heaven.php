<?php


$asciiCode = match($argv[1]) {
    'enter' => 13,
    'up' => 119,
    'down' => 73,
    'esc' => 27,
    default => -1
};

echo $asciiCode;
