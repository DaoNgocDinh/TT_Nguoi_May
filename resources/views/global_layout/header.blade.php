<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/ChuyenTien.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Chuyển<br>tiền
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/NapTien.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Nạp tiền
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/RutTien.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Rút tiền
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/ThanhToanHoaDon.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Thanh<br>toán
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/ChiTieu.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Quản lý<br>chi tiêu
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/Hitory_money.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Lịch sử<br>giao dịch
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/Money_Phone.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Nạp tiền<br>điện thoại
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/QlyQuy.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Quản lý<br>quỹ
                    </span>
                </div>

                <div
                    class="w-[100px] h-[100px] bg-white rounded-2xl shadow-lg flex flex-col items-center pt-3">
                    <div class="h-[45px] flex items-center">
                        <img src="{{ asset('images/icons/HuChiTieu.png') }}" class="w-[43px] h-[43px]">
                    </div>
                    <span class="text-[18px] text-center leading-tight">
                        Hũ chi<br>tiêu
                    </span>
                </div>

            </div>

            <button class="w-[40px] h-[40px] rounded-full bg-[#C31368] shadow-md flex items-center justify-center">
                <i class="fa-solid fa-chevron-right text-xl text-white"></i>
            </button>

        </div>

    </div>
</body>

</html>