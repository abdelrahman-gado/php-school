<?php

require_once __DIR__ . "/DirectoryFilter.php";

$directoryPath = $argv[1];
$targetedExtension = $argv[2];

$directoryFilter = new DirectoryFilter($directoryPath, $targetedExtension);
$directoryFilter->filter();