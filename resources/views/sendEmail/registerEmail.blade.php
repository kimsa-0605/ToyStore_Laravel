<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration successful</title>
</head>
<body>
    <h2>Hello{{ $user['fullname'] }},</h2>
    <p>Thank you for register account <strong>ToyStore</strong>!</p>
    <p>Register Information</p>
    <ul>
        <li><strong>Full name</strong> {{ $user['fullname'] }}</li>
        <li><strong>Email:</strong> {{ $user['email'] }}</li>
    </ul>
    <p>Have a good day!</p>
</body>
</html>
