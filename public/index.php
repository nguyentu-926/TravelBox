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

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <style>
        body {
            background: url("<?= asset('images/OIP.jpg') ?>") no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }
        .container {
            margin-top: 100px;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng đến với Travel Agency</h1>
        <p>Dịch vụ đặt vé du lịch tốt nhất dành cho bạn.</p>
    </div>
</body>
</html>
