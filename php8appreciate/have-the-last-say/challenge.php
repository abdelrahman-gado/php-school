<?php

$csvFilePath = $argv[1];

$csvFile = fopen($csvFilePath, 'r');
while (!feof($csvFile)) {
    $row = fgetcsv($csvFile, separator: '|');
    echo "Country: {$row['country']}, Capital: {$row['capital']}\n";
}
fclose($csvFile);