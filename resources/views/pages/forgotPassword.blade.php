@extends ('master')

@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/forgotPassword.css') }}">
<title>Forgot Password</title>
@endsection

@section('content')
<div class="container-forgot-password">
    <div class="container-forgot-password-content">
       <div class="form-content">
        <div class="icon-back"><i class="fa-solid fa-angle-left"></i></div>
        <div class="form-forgot-password-content">
            <!-- Email Form -->
            <div id="emailForm" class="form-forgot-password">
                <h2>Forgot Password</h2>
                <p>Please note: Your OTP code is only valid for 60 seconds !!!</p>
                <div class="form-block-forgot-password">
                    <div class="form" id="emailFormSubmit">
                        <span>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        </span>
                        <span id="emailError" class="error-message" style="display: none; margin-top: 0px;"></span>
                        <button id="input-email" class="btn-forgot-password" type="button">Verify</button>
                    </div>
                </div>
            </div>

            <!-- OTP Form -->
            <div id="otpForm" class="form-forgot-password" style="display: none;">
                <h2>OTP Code</h2>
                <p>Please note: Your OTP code is only valid for 60 seconds !!!</p>
                <div class="form-block-forgot-password">
                    <div class="form" id="otpFormSubmit">
                        <span>
                            <label for="email">OTP</label>
                            <input type="text" name="otp" id="otp" placeholder="Enter OTP" required>
                        </span>
                        <span id="otpError" class="error-message" style="display: none; margin-top: 0px;"></span>
                        <button id="input-otp" class="btn-forgot-password" type="button">Verify OTP</button>
                    </div>
                </div>
            </div>

            <!-- Password Change Form -->
            <div id="passwordForm" class="form-forgot-password" style="display: none;">
                <h2>Change Password</h2>
                <div class="form-block-forgot-password">
                    <div class="form" id="passwordFormSubmit">
                        <span>
                            <label for="newPassword">New Password</label>
                            <input type="password" name="newPassword" id="newPassword" placeholder="New Password" required>
                            </span>
                        <span id="passwordError" class="error-message" style="display: none; margin-top: 0px;"></span>
                        <button id="input-password" class="btn-forgot-password" type="button">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>

<script type="module" src="/js/pages/forgotPassword.js"></script>

@endsection
