<div id="header-container" class="header-container">
    <div class="header-content">
        <div class="header-contact">
            <div class="header-contact-content">
                <div class="header-contact-phonenumber-email">
                    <span class="header-contact-phonenumber">
                        Call Us: +1 213 974-5898
                    </span>
                    <span class="header-contact-email">
                        Email: <u>toystore@template.com</u>
                    </span>
                </div>
                <div class="header-contact-icons">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="header-nav-bar">
            <div class="header-nav-content">
                <a href="/" class="header-logo">ToyStore</a>
                <div class="header-nav-cart">
                    <div class="header-nav-title">
                        <a class="header-nav-title-hover" href="/catalog">Catalog</a>
                        <a class="header-nav-title-hover" href="/delivery">Delivery</a>
                        <a class="header-nav-title-hover" href="/about">About</a>
                        <a class="header-nav-title-hover" href="/contacts">Contacts</a>
                    </div>
                    <div class="search-bar">
                        <input type="text" name="search" placeholder="Search...">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    @if (session('user'))
                        <div id="user-avatar-header" class="user-avatar-header">
                            <img src="{{ session('user_avatar') ?? 'https://bathanh.com.vn/wp-content/uploads/2017/08/default_avatar.png' }}" alt="">
                            <div id="profile-block" class="profile-block">
                                <div class="profile-header">
                                    <i class="fa-regular fa-user"></i>
                                    <a href="/profile">Profile</a>
                                </div>
                                <form class="form-logout" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <button class="logout-btn" type="submit">Logout</button>
                                </form>
                            </div>
                        </div>
                        <div class="header-cart-icon">
                            <span>Cart</span>
                            <i class="bi bi-cart"></i>
                        </div>
                    @else
                        <div class="login-signup-title">
                            <p><a href="/login">Login</a> / <a href="/sign-up">Sign up</a></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/components/header.js"></script>