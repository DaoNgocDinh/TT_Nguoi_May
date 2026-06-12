<nav class="top-nav">
    <a href="{{ route('home') }}" class="brand-logo" aria-label="Trang chủ">
        <img src="{{ asset('images/logo_bgr_pink.jpg') }}" alt="ĐTY">
    </a>

    <div class="nav-links">
        <a href="#">Dịch vụ</a>
        <a href="#">Về ĐTY</a>
        <a href="#">Tin tức</a>
        <a href="#">Trợ giúp</a>
        <a href="#">Đối tác</a>
    </div>

    <div class="nav-actions">
        <label class="search-box">
            <input type="search" placeholder="Bạn tìm gì...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </label>

        @if (($guest ?? false) === true)
            <button class="pill-button primary" type="button">Log in</button>
            <button class="pill-button ghost" type="button">Sign up</button>
        @else
            <div class="user-chip">
                <img src="{{ asset('images/logo_user.jpg') }}" alt="Người dùng">
                <p><strong>Tôi:</strong><span>Nguyễn Thu Hương</span></p>
            </div>
        @endif
    </div>
</nav>
