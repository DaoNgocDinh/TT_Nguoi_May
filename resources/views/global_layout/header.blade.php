<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title></title>
</head>
=======
<header class="service-header">
    <h1>Tiện ích và dịch vụ</h1>
    <p>
        Ứng dụng tài chính ĐTY giúp bạn có thể tiếp cận nhiều dịch vụ tài chính đa dạng
        với chi phí hợp lý, để bạn làm được nhiều hơn với tiền.
    </p>
>>>>>>> 0e97346f797a83a676100ff6b9bcb6382825c6e2

    <div class="service-strip">
        <button class="round-nav" type="button" aria-label="Trước">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

<<<<<<< HEAD
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
=======
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
>>>>>>> 0e97346f797a83a676100ff6b9bcb6382825c6e2
        </div>

        <button class="round-nav dark" type="button" aria-label="Sau">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
<<<<<<< HEAD
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
=======
</header>
>>>>>>> 0e97346f797a83a676100ff6b9bcb6382825c6e2
