<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>

<body>

    <nav class="h-[80px] bg-white shadow-lg">
        <div class="h-full px-8 flex items-center justify-between">

            <!-- Logo + Menu -->
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo_bgr_pink.jpg') }}" alt="Logo"
                        class="h-[70px] w-[70px] border-2 border-[#707070] rounded-md">
                </a>

                <div class="flex items-center gap-6 ml-8">
                    <a href="#" class="text-lg font-bold text-black hover:text-[#A0185F]">Dịch vụ</a>
                    <a href="#" class="text-lg font-bold text-black hover:text-[#A0185F]">Về ĐTY</a>
                    <a href="#" class="text-lg font-bold text-black hover:text-[#A0185F]">Tin tức</a>
                    <a href="#" class="text-lg font-bold text-black hover:text-[#A0185F]">Trợ giúp</a>
                    <a href="#" class="text-lg font-bold text-black hover:text-[#A0185F]">Đối tác</a>
                </div>
            </div>

            <!-- Search + User -->
            <div class="flex items-center gap-3">

                <div class="relative w-[400px] mr-10">
                    <input type="text"
                        placeholder="Bạn tìm gì..."
                        class="w-full h-10 pl-3 pr-10 rounded-md border border-slate-300
                               focus:outline-none focus:ring-2 focus:ring-[#A0185F]">

                    <i class="fas fa-search absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <img src="{{ asset('images/logo_user.jpg') }}"
                    alt="Avatar"
                    class="w-12 h-12 rounded-full object-cover border-2 border-white">

                <p class="text-black whitespace-nowrap leading-5">
                    <span class="font-bold">Tôi:</span><br>
                    Nguyễn Thị Thu Hương
                </p>

            </div>

        </div>
    </nav>

</body>

</html>
