<?php

require_once __DIR__ . '/../vendor/autoload.php';

use w3lifer\Google\Drive;

new Drive([
    'pathToCredentials' => __DIR__ . '/credentials.json',
    'pathToToken' => __DIR__ . '/token.json',
]);
