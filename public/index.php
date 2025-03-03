<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Kiểm tra xem ứng dụng có đang ở chế độ bảo trì không...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Đăng ký autoloader của Composer...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel và xử lý request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
