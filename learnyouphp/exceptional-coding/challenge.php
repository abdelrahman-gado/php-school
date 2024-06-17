<?php

array_shift($argv);
$filePaths = $argv;

foreach ($filePaths as $filePath) {
    try {
        $fileObject = new SplFileObject($filePath);
        echo $fileObject->getBasename() . "\n";
    } catch (\RuntimeException $e) {
        echo "Unable to open file at path '$filePath'" . "\n";
    }
}