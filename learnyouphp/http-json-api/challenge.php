<?php

$route = $_SERVER['REQUEST_URI'];

header('Content-Type: application/json');
$iso = $_GET['iso'];

if ($route === '/api/parsetime') {
    $date = new DateTime($iso);
    echo json_encode([
        "hour" => $date->format('H'),
        "minute" => $date->format('i'),
        "second" => $date->format('s')
    ]);

} elseif ($route === '/api/unixtime') {
    $unixtime = (new \DateTime())->format('U');
    echo json_encode([
        'unixtime' => $unixtime
    ]);
}