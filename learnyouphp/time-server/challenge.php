<?php

$ip = $argv[1];
$port = $argv[2];

$server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($server, $ip, $port);
socket_listen($server);

$client = socket_accept($server);

$datetime = date('Y-m-d h:i:s') . "\n";
socket_write($client, $datetime, strlen($datetime));
socket_close($client);
socket_close($server);