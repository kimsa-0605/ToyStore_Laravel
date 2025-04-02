@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/forgotPassword.css') }}">
<title>Forgot Password</title>
@endsection
@section('content')
<div class="container-forgot-password">
    <div class="container-forgot-password-content">
       <div class="form-content">
        <div class="icon-back" > <i class="fa-solid fa-angle-left"></i></div>
        <div class="form-forgot-password-content">
            <div id="emailForm" class="form-forgot-password">
                <h2>Forgot Password</h2>
                <p>Please note: Your OTP code is only valid for 60 seconds !!!</p>
                <div class="form-block-forgot-password">
                    <form id="emailFormSubmit" method="POST" action="">
                        @csrf 
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        <button class="btn-forgot-password" type="submit">Verify</button>
                    </form>
                </div>
            </div>
            <div id="otpForm" class="form-forgot-password"style="display: none;">
                <h2>OTP Code</h2>
                <p>Please note: Your OTP code is only valid for 60 seconds !!!</p>
                <div class="form-block-forgot-password">
                    <form id="otpFormSubmit" method="POST" action="">
                        <label for="otp">OTP</label>
                        <input type="text" name="otp" id="otp" placeholder="Enter OTP" required>
                        <button class="btn-forgot-password" type="submit">Send</button>
                    </form>
                </div>
            </div>
            <div id="passwordForm" class="form-forgot-password" style="display: none;">
                <h2>Change Password</h2>
                <div class="form-block-forgot-password">
                    <form id="passwordFormSubmit" method="POST" action="">
                        @csrf
                        <label for="newPassword">New Password</label>
                        <input type="password" name="newPassword" id="newPassword" placeholder="New Password" required>
                        <button class="btn-forgot-password" type="submit">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>
<script type="module" src="/js/pages/forgotPassword.js"></script>
@endsection
