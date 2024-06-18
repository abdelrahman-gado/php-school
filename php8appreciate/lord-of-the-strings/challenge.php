<?php
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

require_once __DIR__ . '/vendor/autoload.php';

$word = $argv[1];
$sentence = $argv[2];

$output = new ConsoleOutput();
$table = new Table($output);
$table->setHeaders(['Function', 'Result'])
    ->setRows([
        ['str_contains', str_contains($sentence, $word) ? 'true': 'false'],
        ['str_starts_with', str_starts_with($sentence, $word) ? 'true' : 'false'],
        ['str_ends_with', str_ends_with($sentence, $word) ? 'true' : 'false'],
    ]);
$table->render();