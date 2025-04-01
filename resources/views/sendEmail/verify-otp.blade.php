<!DOCTYPE html>
<html>
<head>
    <title>Nhập OTP</title>
</head>
<body>
    <h2>Nhập mã OTP</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('verify.otp') }}" method="POST">
        @csrf
        <input type="text" name="otp" placeholder="Nhập OTP" required>
        <button type="submit">Xác nhận</button>
    </form>
</body>
</html>
