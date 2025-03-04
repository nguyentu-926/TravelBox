<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyến đi</title>
    <style>
        body {
            background: url('{{ asset("images/a1.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Chuyến đi</h2>
    
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('booking.submit') }}" method="POST">
        @csrf
        
        <label>Họ và Tên</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Số điện thoại</label>
        <input type="text" name="phone" required>

        <label>Chọn suất chiếu</label>
        <select name="showtime" required>
            <option value="">Chuyến bay</option>
            <option value="10:00">10:00 AM</option>
            <option value="13:00">1:00 PM</option>
            <option value="16:00">4:00 PM</option>
            <option value="19:00">7:00 PM</option>
        </select>

        <label>Số lượng vé</label>
        <input type="number" name="tickets" min="1" required>

        <button type="submit">Đặt Vé</button>
    </form>
</div>
</body>
</html>
