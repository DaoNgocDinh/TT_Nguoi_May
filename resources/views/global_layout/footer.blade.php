<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Footer</title>
</head>

</html>

<footer class="bg-[#A0185F] text-white h-[125px] w-full">
    <div class="h-full px-10 flex flex-col justify-center">

        <!-- 4 cột trên cùng -->
        <div class="grid grid-cols-4 gap-8 text-[18px]">

            <div class="w-full text-center">
                <h3 class="font-bold mb-2">
                    Hợp tác doanh nghiệp
                </h3>

                <p class="text-gray-300">
                    Hotline: 0904606689<br>
                    Email: vidientuthongminh@DTY.vn
                </p>
            </div>

            <div class="w-full text-center">
                <h3 class="font-bold mb-2">
                    Chăm sóc khách hàng
                </h3>

                <p class="text-gray-300">
                    Hà Nội: Trường Đại học Thủy Lợi<br>
                    175 Tây Sơn, Đống Đa
                </p>
            </div>

            <div class="w-full text-center">
                <h3 class="font-bold mb-2">
                    Về chúng tôi
                </h3>

                <p class="text-gray-300">
                    Trợ thủ tài chính<br>
                    An toàn - bảo mật
                </p>
            </div>

            <div class="w-full">
                <img src="{{ asset('images/logo_bgr_pink.jpg') }}" alt="Logo" class="w-[50px] h-[50px] mx-auto">

                <p class="text-gray-300 text-center text-[15px]">
                    CÔNG TY CỔ PHẦN DỊCH VỤ<br>DI ĐỘNG TRỰC TIẾP
                </p>
            </div>

        </div>

    </div>
</footer>