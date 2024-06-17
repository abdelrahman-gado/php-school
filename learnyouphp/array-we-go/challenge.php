<?php

$filePathsArray = array_slice($argv, 1);
$existedFiles = array_filter($filePathsArray, function ($file) {
    return file_exists($file);
});
$mappedFiles = array_map(function ($file) {
    return new SplFileObject($file);
}, $existedFiles);

while ($file = array_shift($mappedFiles)) {
    echo $file->getBasename() . "\n";
}