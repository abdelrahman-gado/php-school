<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Stringy\create as s;

error_reporting(E_ALL ^ E_DEPRECATED);

$klein = new \Klein\Klein();

$klein->respond('POST', '/reverse', function ($request, $response) {
    $data = $request->param('data');
    $reversedData = (string) s($data)->reverse();
    return $response->json([
        'result' => $reversedData
    ]);
});

$klein->respond('POST', '/swapcase', function ($request, $response) {
    $data = $request->param('data');
    $swapCasedData = (string) s($data)->swapcase();
    return $response->json([
        'result' => $swapCasedData
    ]);
});

$klein->respond('POST', '/titleize', function ($request, $response) {
    $data = $request->param('data');
    $titleizedData = (string) s($data)->titleize();
    return $response->json([
        'result' => $titleizedData
    ]);
});

$klein->dispatch();