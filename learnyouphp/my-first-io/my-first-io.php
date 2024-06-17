<?php

$fileContent = file_get_contents($argv[1]);
echo substr_count($fileContent, "\n");