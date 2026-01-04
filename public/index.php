<?php

require 'vendor/autoload.php';

// Handle static assets in case of running PHP built-in server
if (php_sapi_name() == 'cli-server') {
    if (file_exists(__DIR__ . $_SERVER['REQUEST_URI']) &&
        !is_dir(__DIR__ . $_SERVER['REQUEST_URI'])
    ) {
        return false;
    }
}

// Create new app
$app = new \SigmaPHP\Core\App\Kernel();

// Run
$app->init();
