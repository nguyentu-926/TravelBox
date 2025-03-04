<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            margin-left: 240px;
            width: calc(100% - 240px);
            padding: 20px;
        }

        .header {
            text-align: center;
            background: url('images/a16.jpg') no-repeat center center;
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

        .content-wrapper {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .left-content {
            flex: 4;
        }

        .right-content {
            flex: 1;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .trip-container, .destination-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .trip-card, .destination-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
        }

        .trip-card img, .destination-card img {
            width: 100%;
            border-radius: 10px;
        }

        .review-item {
            display: flex;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }
        .review-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .review-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .review-avatar img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }

        .review-text {
            margin-top: 10px;
        }

        .review-avatar {
            flex: 30%;
            text-align: center;
        }

        .review-avatar img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }

        .review-text {
            flex: 70%;
            padding-left: 15px;
        }

        .review-text p {
            margin: 5px 0;
        }

        .review-box {
            text-align: center;
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
        <li><a href="#">Trang Chủ</a></li>
        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
        <li><a href="{Ơ route('booking) }}">Chuyến Đi</a></li>
        <li><a href="#">Liên Hệ</a></li>
        <li><a href="#">Hỗ Trợ</a></li>
    </ul>
</div>

<div class="main-content">
    <div class="header">
        <h1>TravelBox</h1>
    </div>
    <div class="content-wrapper">
        <div class="left-content">
            <section class="trip-packages">
                <h2 style="text-align: center;">Gói du lịch hấp dẫn</h2>
                <div class="trip-container">
                    <div class="trip-card">
                        <img src="images/a9.jpg" alt="Nhật Bản">
                        <h3>Nhật Bản</h3>
                        <p>3 ngày 2 đêm chỉ từ 9 triệu đồng!</p>
                    </div>
                    <div class="trip-card">
                        <img src="images/a7.webp" alt="Hội An">
                        <h3>Hội An</h3>
                        <p>2 ngày 1 đêm chỉ từ 900k</p>
                    </div>
                </div>
            </section>
            <section class="destination-section">
                <h2 style="text-align: center;">Địa điểm thu hút</h2>
                <div class="destination-container">
                    <div class="destination-card">
                        <img src="images/a3.jpg" alt="Paris">
                        <h3>Paris</h3>
                    </div>
                    <div class="destination-card">
                        <img src="images/a8.jpg" alt="Phuong_Hoang_Co_Tran">
                        <h3>Phượng hoàng cổ trấn</h3>
                    </div>
                </div>
            </section>
        </div>
        <div class="right-content">
            <h2 class="review-box">Đánh giá khách hàng</h2>
            <div class="review-container">
                <div class="review-item">
                    <div class="review-avatar">
                        <img src="images/n1.jpg" alt="Nguyễn Linh Chi">
                    </div>
                    <div class="review-text">
                        <p><strong>Nguyễn Linh Chi:</strong> "Chuyến đi thật tuyệt vời!"</p>
                    </div>
                </div>
                <div class="review-item">
                    <div class="review-avatar">
                        <img src="images/n2.jpg" alt="V">
                    </div>
                    <div class="review-text">
                        <p><strong>V:</strong> "Amazing trip!"</p>
                    </div>
                </div>
                <div class="review-item">
                    <div class="review-avatar">
                        <img src="images/n3.jpg" alt="Togame Jou">
                    </div>
                    <div class="review-text">
                        <p><strong>Togame Jou:</strong> "Chắc chắn tôi sẽ quay trở lại!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>2025 TravelBox - Du lịch dễ dàng.</p>
    </footer>
</div>

</body>
</html>
