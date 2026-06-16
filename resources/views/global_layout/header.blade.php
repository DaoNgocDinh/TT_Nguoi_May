<header class="service-header">
    <h1>Tiện ích và dịch vụ</h1>
    <p>
        Ứng dụng tài chính ĐTY giúp bạn có thể tiếp cận nhiều dịch vụ tài chính đa dạng
        với chi phí hợp lý, để bạn làm được nhiều hơn với tiền.
    </p>

    <div class="service-strip">
        <button class="round-nav" type="button" aria-label="Trước">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="service-list">
            <a href="/chuyen-tien" class="service-card {{ request()->is('chuyen-tien') ? 'active' : '' }}">
                <img src="{{ asset('images/icons/ChuyenTien.png') }}" alt="Chuyển tiền">
                <span>Chuyển<br>tiền</span>
            </a>

            <a href="/nap-tien" class="service-card {{ request()->is('nap-tien') ? 'active' : '' }}">
                <img src="{{ asset('images/icons/NapTien.png') }}" alt="Nạp tiền">
                <span>Nạp tiền</span>
            </a>

            <a href="/rut-tien" class="service-card {{ request()->is('rut-tien') ? 'active' : '' }}">
                <img src="{{ asset('images/icons/RutTien.png') }}" alt="Rút tiền">
                <span>Rút tiền</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/ThanhToanHoaDon.png') }}" alt="Thanh toán">
                <span>Thanh toán</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/ChiTieu.png') }}" alt="Quản lý chi tiêu">
                <span>Quản lý<br>chi tiêu</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/Hitory_money.png') }}" alt="Lịch sử giao dịch">
                <span>Lịch sử<br>giao dịch</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/Money_Phone.png') }}" alt="Nạp tiền điện thoại">
                <span>Nạp tiền<br>điện thoại</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/QlyQuy.png') }}" alt="Quản lý quỹ">
                <span>Quản lý quỹ</span>
            </a>

            <a href="#" class="service-card">
                <img src="{{ asset('images/icons/HuChiTieu.png') }}" alt="Hũ chi tiêu">
                <span>Hũ chi tiêu</span>
            </a>
        </div>

        <button class="round-nav dark" type="button" aria-label="Sau">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</header>