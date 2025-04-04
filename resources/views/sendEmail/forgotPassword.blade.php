<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
</head>
<body font-family: Arial, sans-serif; line-height: 1.5; color: #333;>
    <h2>Hello {{ $user['fullname'] }},</h2>
    <p>Your otp code is: {{ $otp }}</p>
    <p>Best regards,</p>
    <p><strong>Admin</strong></p>
</body>
</html>