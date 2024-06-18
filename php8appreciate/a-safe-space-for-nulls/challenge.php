<?php

if (file_exists('users.csv')) {
    unlink('users.csv');
}

$csvFile = fopen('users.csv', 'a');
fputcsv($csvFile, ["First Name", "Last Name", "Age", "House num", "Addr 1", "Addr 2"]);

$userFields = [
    $user->firstName,
    $user->lastName,
    $user?->age,
    $user?->address?->number,
    $user?->address?->addressLine1,
    $user?->address?->addressLine2,
];

fputcsv($csvFile, $userFields);
fclose($csvFile);