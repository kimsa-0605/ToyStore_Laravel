@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
<title>Sign Up</title>
@endsection
@section('content')
<!-- Sign up contact section -->
<div class="container-login">
    <div class="container-login-content">
        <div class="login-form-content">
            <div class="image">
                <img src="images/ui/login_image.jpg" alt="Teddy Bear">
            </div>
            <div class="form-login">
                <h1>Welcome back !</h1>
                <form  class="form" action="/login" method="Post">
                    @csrf
                    <div class="form-block">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        @error('email') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-block">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        @error('password') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
                    <div class="button-block">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
                <p class="text-center"><a href="/forgot-password">Forgot password</a></p>
                <p class="text-center">Don't have an account? <a href="/sign-up">Register for an account</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End Sign up contact section -->
@endsection
