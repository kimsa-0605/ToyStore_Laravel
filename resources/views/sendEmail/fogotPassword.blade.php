<!DOCTYPE html>
<html>
<head>
    <title>Quên mật khẩu</title>
</head>
<body>
    <h2>Quên mật khẩu</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('forgot.password') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Nhập email" required>
        <button type="submit">Gửi OTP</button>
    </form>
</body>
</html>
