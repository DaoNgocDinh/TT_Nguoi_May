@php
    $services = [
        ['route' => 'wallet.transfer', 'icon' => 'ChuyenTien.png', 'label' => 'Chuyển tiền'],
        ['route' => 'wallet.deposit', 'icon' => 'NapTien.png', 'label' => 'Nạp tiền'],
        ['route' => 'wallet.withdraw', 'icon' => 'RutTien.png', 'label' => 'Rút tiền'],
        ['route' => null, 'icon' => 'ThanhToanHoaDon.png', 'label' => 'Thanh toán'],
        ['route' => null, 'icon' => 'ChiTieu.png', 'label' => 'Quản lý chi tiêu'],
        ['route' => null, 'icon' => 'Hitory_money.png', 'label' => 'Lịch sử giao dịch'],
        ['route' => null, 'icon' => 'Money_Phone.png', 'label' => 'Nạp tiền điện thoại'],
        ['route' => null, 'icon' => 'QlyQuy.png', 'label' => 'Quản lý quỹ'],
        ['route' => null, 'icon' => 'HuChiTieu.png', 'label' => 'Hũ chi tiêu'],
    ];
@endphp

<header class="service-header">
    <h1>Tiện ích và dịch vụ</h1>
    <p>Ứng dụng tài chính ĐTY giúp bạn có thể tiếp cận nhiều dịch vụ tài chính đa dạng với chi phí hợp lý, để bạn làm được nhiều hơn với tiền.</p>

    <div class="service-strip">
        <button class="round-nav" type="button" aria-label="Trước">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="service-list">
            @foreach ($services as $service)
                @php
                    $isActive = $service['route'] && request()->routeIs($service['route']);
                    $href = $service['route'] ? route($service['route']) : '#';
                @endphp

                <a class="service-card {{ $isActive ? 'active' : '' }}" href="{{ $href }}">
                    <img src="{{ asset('images/icons/' . $service['icon']) }}" alt="">
                    <span>{{ $service['label'] }}</span>
                </a>
            @endforeach
        </div>

        <button class="round-nav dark" type="button" aria-label="Sau">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</header>
