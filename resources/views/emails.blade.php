<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành công</title>
</head>
<body>
    <h2>Chào {{ $user['fullname'] }},</h2>
    <p>Cảm ơn bạn đã đăng ký tại <strong>Your App Name</strong>!</p>
    <p>Thông tin đăng ký:</p>
    <ul>
        <li><strong>Họ và tên:</strong> {{ $user['fullname'] }}</li>
        <li><strong>Email:</strong> {{ $user['email'] }}</li>
        <li><strong>Số điện thoại:</strong> {{ $user['phone'] }}</li>
    </ul>
    <p>Chúc bạn một ngày vui vẻ!</p>
</body>
</html>
