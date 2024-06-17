<?php

$DSN = $argv[1];
$username = $argv[2];

$pdo = new PDO($DSN);
foreach ($pdo->query('SELECT * FROM users WHERE age > 30') as $row) {
    echo "User: {$row['name']} Age: {$row['age']} Sex: {$row['gender']}\n";
}

$stmt = $pdo->prepare("UPDATE users SET name = 'David Attenborough' WHERE name = :name");
$stmt->bindParam(':name', $username);
$stmt->execute();