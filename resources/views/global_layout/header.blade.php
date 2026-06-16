<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Tiện ích và dịch vụ</title>
</head>

<body>

    <div class="min-h-[267px] bg-gradient-to-r from-[#A0185F] to-[#D91773] flex flex-col items-center py-4">

        <h2 class="text-[32px] font-bold text-white">
            Tiện ích và dịch vụ
        </h2>

        <p class="text-[23px] text-white text-center mt-2">
            Ứng dụng tài chính ĐTY giúp bạn có thể tiếp cận nhiều dịch vụ tài chính đa dạng
            với chi phí hợp lý, để bạn làm <br>
            được nhiều hơn với tiền.
        </p>

        <div class="flex items-center gap-8 mt-6">

            <!-- Nút trái -->
            <button
                class="w-[40px] h-[40px] rounded-full bg-white shadow-md flex items-center justify-center cursor-pointer hover:scale-110 transition">
                <i class="fa-solid fa-chevron-left text-xl text-[#A0185F]"></i>
            </button>

            <!-- Danh sách tiện ích -->
            <div class="flex gap-6">

                <!-- Chuyển tiền -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/ChuyenTien.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Chuyển tiền
                    </span>
                </div>

                <!-- Nạp tiền -->
                <a href="/nap-tien-dien-thoai"
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-[#A0185F]">
                    <img src="{{ asset('images/icons/NapTien.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Nạp tiền
                    </span>
                </a>

                <!-- Rút tiền -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/RutTien.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Rút tiền
                    </span>
                </div>

                <!-- Thanh toán -->
                <a href="/thanh-toan-hoa-don"
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-[#A0185F]">
                    <img src="{{ asset('images/icons/ThanhToanHoaDon.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Thanh toán
                    </span>
                </a>

                <!-- Quản lý chi tiêu -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/ChiTieu.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Quản lý<br>chi tiêu
                    </span>
                </div>

                <!-- Lịch sử giao dịch -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/Hitory_money.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Lịch sử<br>giao dịch
                    </span>
                </div>

                <!-- Nạp tiền điện thoại -->
                <a href="/nap-tien-dien-thoai"
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-[#A0185F]">
                    <img src="{{ asset('images/icons/Money_Phone.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Nạp tiền<br>điện thoại
                    </span>
                </a>

                <!-- Quản lý quỹ -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/QlyQuy.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Quản lý quỹ
                    </span>
                </div>

                <!-- Hũ chi tiêu -->
                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center justify-center gap-2 cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/icons/HuChiTieu.png') }}" class="w-[43px] h-[43px]" alt="">
                    <span class="text-[16px] text-center leading-tight">
                        Hũ chi tiêu
                    </span>
                </div>

            </div>

            <!-- Nút phải -->
            <button
                class="w-[40px] h-[40px] rounded-full bg-[#C31368] shadow-md flex items-center justify-center cursor-pointer hover:scale-110 transition">
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