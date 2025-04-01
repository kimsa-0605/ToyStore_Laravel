<!DOCTYPE html>
<html>
<head>
    <title>Đặt lại mật khẩu</title>
</head>
<body>
    <h2>Đặt lại mật khẩu</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('reset.password') }}" method="POST">
        @csrf
        <input type="password" name="password" placeholder="Mật khẩu mới" required>
        <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
        <button type="submit">Cập nhật mật khẩu</button>
    </form>
</body>
</html>
