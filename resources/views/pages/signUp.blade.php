@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/signUp.css') }}">
<title>Sign Up</title>
@endsection
@section('content')
<!-- Sign up contact section -->
<div class="container-signup">
    <div class="container-signup-content">
        <div class="signup-form-content">
            <div class="form-signup">
                <h2>Sign up</h2>
                <form action="/sign-up" method="Post">
                    @csrf
                    <div class="form-block">
                        <label for="full_name">Full name</label>
                        <input type="text" id="name" name="fullname" required>
                        @error('fullname') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
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
                    <div class="form-block">
                        <label for="r_password">Re-enter password</label>
                        <input type="password" id="r_password" name="confirmPassword" required>
                        @error('confirmPassword') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
                    <div class="button-block">
                        <button type="submit" class="signup-btn">Sign up</button>
                    </div>
                </form>
                <p class="text-center">Already have an account? <a href="/login">Log in</a></p>
            </div>
            <div class="image">
                <img src="images/ui/logo_register.jpg" alt="Teddy Bear">
            </div>
        </div>
    </div>
</div>
<!-- End Sign up contact section -->
@endsection
