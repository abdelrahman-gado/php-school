<?php

$directoryPath = $argv[1];
$targetExtension = $argv[2];

foreach (new DirectoryIterator($directoryPath) as $fileInfo) {
    if ($fileInfo->getExtension() === $targetExtension) {
        echo $fileInfo . "\n";
    }
}