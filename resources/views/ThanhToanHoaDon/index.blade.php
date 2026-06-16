@extends('global_layout.body')

@section('title', 'Thanh toán hóa đơn')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Thanh toán hóa đơn</h1>
    <p class="text-gray-600 mb-6">Điện · Nước · Internet · Bảo hiểm</p>

    <!-- Tabs -->
    <div class="flex gap-4 border-b border-gray-200 mb-8 overflow-x-auto">
        <button class="px-4 py-3 border-b-2 border-[#A0185F] text-[#A0185F] font-semibold whitespace-nowrap">
            <i class="fas fa-list mr-2"></i> 1 Hình thức
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-file-invoice mr-2"></i> 2 Loại HD
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-search mr-2"></i> 3 Tra cứu
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-check mr-2"></i> 4 Xác nhận
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-lock mr-2"></i> 5 Xác thực
        </button>
    </div>

    <!-- Nội dung Tab 1: Hình thức thanh toán -->
    <div class="mb-12">
        <h2 class="text-xl font-bold text-[#121212] mb-6">Chọn hình thức thanh toán</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Thanh toán trực tiếp -->
            <a href="/thanh-toan-hoa-don/loai-hoa-don" class="block p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 border-l-4 border-[#A0185F]">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#A0185F] to-[#8B1550] rounded-xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#121212] mb-2">Thanh toán trực tiếp</h3>
                        <p class="text-gray-600">Nhập mã khách hàng để trả cứu và thanh toán hóa đơn nhanh chóng</p>
                        <div class="mt-3 text-[#A0185F] font-semibold flex items-center gap-2">
                            Tiếp tục <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Quét mã QR -->
            <a href="/thanh-toan-hoa-don/quet-qr" class="block p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 border-l-4 border-[#A0185F]">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#A0185F] to-[#8B1550] rounded-xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#121212] mb-2">Quét mã QR</h3>
                        <p class="text-gray-600">Quét hoặc tải ảnh mã QR từ hóa đơn giấy để thanh toán tức thì</p>
                        <div class="mt-3 text-[#A0185F] font-semibold flex items-center gap-2">
                            Tiếp tục <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Loại hóa đơn khác -->
    <div class="bg-white rounded-2xl p-6 shadow-lg mb-8">
        <h2 class="text-xl font-bold text-[#121212] mb-6">Thanh toán theo loại hóa đơn</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Tiền điện -->
            <div class="p-4 bg-gradient-to-br from-[#FFD700] to-[#FFC700] rounded-xl text-center cursor-pointer hover:shadow-lg transition">
                <div class="text-3xl mb-2"><i class="fas fa-bolt"></i></div>
                <h3 class="font-bold text-[#121212] text-sm">Tiền điện</h3>
                <p class="text-xs text-gray-700 mt-1">EVN - Điện lực</p>
            </div>

            <!-- Tiền nước -->
            <div class="p-4 bg-gradient-to-br from-[#87CEEB] to-[#4FA3E8] rounded-xl text-center cursor-pointer hover:shadow-lg transition">
                <div class="text-3xl mb-2"><i class="fas fa-droplet"></i></div>
                <h3 class="font-bold text-white text-sm">Tiền nước</h3>
                <p class="text-xs text-blue-100 mt-1">SAWACO - Nước sạch</p>
            </div>

            <!-- Internet -->
            <div class="p-4 bg-gradient-to-br from-[#A0185F] to-[#8B1550] rounded-xl text-center cursor-pointer hover:shadow-lg transition">
                <div class="text-3xl mb-2 text-white"><i class="fas fa-wifi"></i></div>
                <h3 class="font-bold text-white text-sm">Internet</h3>
                <p class="text-xs text-pink-100 mt-1">VNPT / FPT / Viettel</p>
            </div>

            <!-- Bảo hiểm -->
            <div class="p-4 bg-gradient-to-br from-[#2ECC71] to-[#27AE60] rounded-xl text-center cursor-pointer hover:shadow-lg transition">
                <div class="text-3xl mb-2 text-white"><i class="fas fa-shield-alt"></i></div>
                <h3 class="font-bold text-white text-sm">Bảo hiểm</h3>
                <p class="text-xs text-green-100 mt-1">Bảo Việt / Prudential</p>
            </div>
        </div>
    </div>

    <!-- UU ĐÃI & THÔNG TIN -->
    <div class="bg-white rounded-2xl p-6 shadow-lg">
        <h2 class="text-lg font-bold text-[#121212] mb-6">UU ĐÃI & THÔNG TIN</h2>
        <div class="space-y-4">
            <div class="flex items-start gap-3 pb-4 border-b border-gray-100">
                <i class="fas fa-hourglass-end text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Xử lý tức thì</h3>
                    <p class="text-gray-600 text-sm">Thanh toán hoàn tất trong 30 giây</p>
                </div>
            </div>
            <div class="flex items-start gap-3 pb-4 border-b border-gray-100">
                <i class="fas fa-money-bill-wave text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Phí giao dịch</h3>
                    <p class="text-gray-600 text-sm">Chỉ 5.000đ/hóa đơn, mọi loại</p>
                </div>
            </div>
            <div class="flex items-start gap-3">
                <i class="fas fa-lock text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Bảo mật tuyệt đối</h3>
                    <p class="text-gray-600 text-sm">Mã hóa PIN & xác thực 2 lớp</p>
                </div>
            </div>
        </div>
    </div>

    <!-- LỊCH SỬ GẦN ĐÂY -->
    <div class="mt-8 bg-white rounded-2xl p-6 shadow-lg">
        <h2 class="text-lg font-bold text-[#121212] mb-6">LỊCH SỬ GẦN ĐÂY</h2>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-[#FFF5F7] to-[#F5F0FF] rounded-lg border-l-4 border-[#FFD700]">
                <div>
                    <p class="font-semibold text-[#121212]">Tiền điện</p>
                    <p class="text-sm text-gray-600">12/05</p>
                </div>
                <p class="font-bold text-[#FFD700]">378.000đ</p>
            </div>
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-[#F0F8FF] to-[#F5F0FF] rounded-lg border-l-4 border-[#87CEEB]">
                <div>
                    <p class="font-semibold text-[#121212]">Internet</p>
                    <p class="text-sm text-gray-600">10/05</p>
                </div>
                <p class="font-bold text-[#87CEEB]">220.000đ</p>
            </div>
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-[#F0F5FF] to-[#F5F0FF] rounded-lg border-l-4 border-[#4FA3E8]">
                <div>
                    <p class="font-semibold text-[#121212]">Tiền nước</p>
                    <p class="text-sm text-gray-600">08/05</p>
                </div>
                <p class="font-bold text-[#4FA3E8]">95.000đ</p>
            </div>
        </div>
    </div>
</div>
@endsection
