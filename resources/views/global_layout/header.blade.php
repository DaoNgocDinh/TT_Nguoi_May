<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
</head>

<body>
    <div class="h-[267px] bg-gradient-to-r from-[#A0185F] to-[#D91773] flex flex-col items-center">

        <h2 class="text-[32px] font-bold text-white mt-2">
            Tiện ích và dịch vụ
        </h2>

        <p class="text-[23px] text-white text-center">
            Ứng dụng tài chính ĐTY giúp bạn có thể tiếp cận nhiều dịch vụ tài chính đa dạng
            với chi phí hợp lý, để bạn làm <br>
            được nhiều hơn với tiền.
        </p>

        <div class="flex items-center gap-8 mt-6">

            <button class="w-[40px] h-[40px] rounded-full bg-white shadow-md flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-xl text-[#A0185F]"></i>
            </button>

            <div class="flex gap-6">
                <a href="/chuyen-tien">
                    <div
                        class="service-card {{ request()->is('chuyen-tien') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('chuyen-tien') ? asset('images/icons/ChuyenTienhover.png') : asset('images/icons/ChuyenTien.png') }}"
                                data-normal="{{ asset('images/icons/ChuyenTien.png') }}"
                                data-hover="{{ asset('images/icons/ChuyenTienhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Chuyển<br>tiền
                        </span>
                    </div>
                </a>

                <a href="/nap-tien">
                    <div
                        class="service-card {{ request()->is('nap-tien') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('nap-tien') ? asset('images/icons/NapTienhover.png') : asset('images/icons/NapTien.png') }}"
                                data-normal="{{ asset('images/icons/NapTien.png') }}"
                                data-hover="{{ asset('images/icons/NapTienhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Nạp tiền
                        </span>
                    </div>
                </a>

                <a href="/rut-tien">
                    <div
                        class="service-card {{ request()->is('rut-tien') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('rut-tien') ? asset('images/icons/RutTienhover.png') : asset('images/icons/RutTien.png') }}"
                                data-normal="{{ asset('images/icons/RutTien.png') }}"
                                data-hover="{{ asset('images/icons/RutTienhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Rút tiền
                        </span>
                    </div>
                </a>

                <a href="/thanh-toan-hoa-don">
                    <div
                        class="service-card {{ request()->is('thanh-toan-hoa-don') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('thanh-toan-hoa-don') ? asset('images/icons/ThanhToanHoaDonhover.png') : asset('images/icons/ThanhToanHoaDon.png') }}"
                                data-normal="{{ asset('images/icons/ThanhToanHoaDon.png') }}"
                                data-hover="{{ asset('images/icons/ThanhToanHoaDonhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Thanh<br>toán
                        </span>
                    </div>
                </a>

                <a href="/quan-ly-chi-tieu">
                    <div
                        class="service-card {{ request()->is('quan-ly-chi-tieu') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('quan-ly-chi-tieu') ? asset('images/icons/ChiTieuhover.png') : asset('images/icons/ChiTieu.png') }}"
                                data-normal="{{ asset('images/icons/ChiTieu.png') }}"
                                data-hover="{{ asset('images/icons/ChiTieuhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Quản lý<br>chi tiêu
                        </span>
                    </div>
                </a>

                <a href="/lich-su-giao-dich">
                    <div
                        class="service-card w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ asset('images/icons/Hitory_money.png') }}"
                                data-normal="{{ asset('images/icons/Hitory_money.png') }}"
                                data-hover="{{ asset('images/icons/Hitory_moneyhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Lịch sử<br>giao dịch
                        </span>
                    </div>
                </a>

                <a href="/nap-tien-dien-thoai">
                    <div
                        class="service-card {{ request()->is('nap-tien-dien-thoai') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('nap-tien-dien-thoai') ? asset('images/icons/Money_Phonehover.png') : asset('images/icons/Money_Phone.png') }}"
                                data-normal="{{ asset('images/icons/Money_Phone.png') }}"
                                data-hover="{{ asset('images/icons/Money_Phonehover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Nạp tiền<br>điện thoại
                        </span>
                    </div>
                </a>

                <a href="/QuanLyQuy">
                    <div
                        class="service-card {{ request()->is('QuanLyQuy') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('QuanLyQuy') ? asset('images/icons/QlyQuyhover.png') : asset('images/icons/QlyQuy.png') }}"
                                data-normal="{{ asset('images/icons/QlyQuy.png') }}"
                                data-hover="{{ asset('images/icons/QlyQuyhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Quản lý<br>quỹ
                        </span>
                    </div>
                </a>

                <a href="/hu-chi-tieu">
                    <div
                         class="service-card {{ request()->is('hu-chi-tieu') ? 'service-card-active' : '' }} w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3 cursor-pointer">
                        <div class="h-[45px] flex items-center">
                            <img src="{{ request()->is('hu-chi-tieu') ? asset('images/icons/HuChiTieuhover.png') : asset('images/icons/HuChiTieu.png') }}"
                                data-normal="{{ asset('images/icons/HuChiTieu.png') }}"
                                data-hover="{{ asset('images/icons/HuChiTieuhover.png') }}"
                                class="service-icon w-[43px] h-[43px]">
                        </div>
                        <span class="service-text text-[18px] text-center leading-tight">
                            Hũ chi<br>tiêu
                        </span>
                    </div>
                </a>

            </div>

            <button class="w-[40px] h-[40px] rounded-full bg-[#C31368] shadow-md flex items-center justify-center">
                <i class="fa-solid fa-chevron-right text-xl text-white"></i>
            </button>

        </div>

    </div>
</body>

</html>

<style>
    .service-card {
        transition: all .3s ease;
    }

    .service-card:hover,
    .service-card-active {
        background: #D91773;
        box-shadow: 0 12px 24px rgba(217, 23, 115, .35);
    }

    .service-card:hover .service-text,
    .service-card-active .service-text {
        color: white;
    }

    .service-text {
        transition: color .3s ease;
    }

    .service-icon {
        transition: all .3s ease;
    }
</style>

<script>
    document.querySelectorAll('.service-card').forEach(card => {

        const img = card.querySelector('.service-icon');

        card.addEventListener('mouseenter', () => {
            img.src = img.dataset.hover;
        });

        card.addEventListener('mouseleave', () => {
            img.src = img.dataset.normal;
        });

    });
    document.querySelectorAll('.service-card').forEach(card => {

        const img = card.querySelector('.service-icon');

        card.addEventListener('mouseenter', () => {
            img.src = img.dataset.hover;
        });

        card.addEventListener('mouseleave', () => {
            img.src = img.dataset.normal;
        });

    });
</script>