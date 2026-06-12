@extends('layouts.app')

@section('title', 'Trang chủ - Ví điện tử ĐTY')

@section('content')
    <section class="home-hero">
        <div class="hero-copy">
            <img src="{{ asset('images/logo_bgr_pink.jpg') }}" alt="ĐTY" class="hero-logo">
            <p>Ví điện tử ĐTY</p>
            <h2>Chạm một giây,<br>thanh toán ngay!</h2>
            <span>Ví điện tử ĐTY - Sống thông minh, tiêu tiện lợi</span>
            <div class="download-row">
                <strong>Tải ngay!</strong>
                <div class="mini-qr">QR</div>
                <div class="store-badge"><i class="fa-brands fa-google-play"></i> Google Play</div>
            </div>
        </div>

        <div class="phone-preview" aria-label="Ứng dụng ví điện tử ĐTY">
            <div class="phone-top">
                <span>ĐTY</span>
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="phone-qr">
                <i class="fa-solid fa-qrcode"></i>
                <small>SCAN TO PAY</small>
            </div>
            <div class="phone-actions">
                <a href="{{ route('wallet.transfer') }}"><i class="fa-solid fa-arrow-right-arrow-left"></i><span>Chuyển tiền</span></a>
                <a href="{{ route('wallet.deposit') }}"><i class="fa-solid fa-money-bill-transfer"></i><span>Nạp tiền</span></a>
                <a href="{{ route('wallet.withdraw') }}"><i class="fa-solid fa-wallet"></i><span>Rút tiền</span></a>
                <a href="#"><i class="fa-solid fa-gift"></i><span>Ưu đãi</span></a>
            </div>
        </div>
    </section>
@endsection
