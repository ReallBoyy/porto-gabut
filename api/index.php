<?php

/**
 * Vercel serverless entrypoint.
 *
 * Same bootstrap as public/index.php, but the relative paths go one level
 * deeper because this file lives in /api. Every request that is not a static
 * asset (see the routes table in vercel.json) lands here.
 */

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
