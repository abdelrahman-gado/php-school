<?php

if (file_exists('param.log')) {
    unlink('param.log');
}

function logParameter(mixed $param): void
{
    $logFile = fopen('./param.log', 'a');
    $type = get_debug_type($param);
    $log = (new DateTime())->format('H:i:s') . ': Got: ' . $type . "\n";
    fwrite($logFile, $log);
    fclose($logFile);
}