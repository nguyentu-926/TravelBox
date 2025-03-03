@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="{{ route('home')
    <title>TravelBox - Trang Chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: rgb(117, 219, 217);
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            position: fixed;
            left: 0;
            top: 0;
        }

        .main-content {
            margin-left: 240px;
            width: calc(100% - 240px);
            padding: 20px;
        }

        .header {
            text-align: center;
            background: url('{{ asset("images/a16.jpg") }}') no-repeat center center;
            background-size: cover;
            color: white;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 50px;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 10px;
        }

        footer {
            background: rgb(117, 219, 217);
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Menu</h2>
    <ul>
        <li><a href="{{ route('home') }}">Trang Chủ</a></li>
        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
        <li><a href="#">Chuyến Đi</a></li>
        <li><a href="#">Liên Hệ</a></li>
        <li><a href="#">Hỗ Trợ</a></li>
    </ul>
</div>

<div class="main-content">
    <div class="header">
        <h1>TravelBox</h1>
    </div>

    <footer>
        <p>2025 TravelBox - Du lịch dễ dàng.</p>
    </footer>
</div>

</body>
</html>

