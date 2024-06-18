<?php

$password = $argv[1];

try {
    verify_password($password);
} catch (InvalidPasswordException) {
    echo "Given password is invalid, please try again";
}