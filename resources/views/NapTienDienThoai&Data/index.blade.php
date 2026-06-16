@extends('global_layout.body')

@section('title', 'Nạp tiền & Data')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Nạp tiền & Data</h1>
    <p class="text-gray-600 mb-6">Viettel · Vinaphone · Mobifone · Vietnamobile</p>

    <!-- Tabs -->
    <div class="flex gap-4 border-b border-gray-200 mb-8 overflow-x-auto">
        <button class="px-4 py-3 border-b-2 border-[#A0185F] text-[#A0185F] font-semibold whitespace-nowrap">
            <i class="fas fa-list mr-2"></i> 1 Dịch vụ
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-mobile-alt mr-2"></i> 2 Nhà mạng
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-phone mr-2"></i> 3 Số ĐT
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-shopping-bag mr-2"></i> 4 Chọn gói
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-check mr-2"></i> 5 Xác nhận
        </button>
        <button class="px-4 py-3 border-b-2 border-transparent text-gray-600 hover:text-[#A0185F] whitespace-nowrap">
            <i class="fas fa-lock mr-2"></i> 6 Xác thực
        </button>
    </div>

    <!-- Nội dung Tab 1: Dịch vụ -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <!-- Nạp tiền điện thoại -->
        <a href="/nap-tien-dien-thoai/nha-mang" class="block p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 border-l-4 border-[#A0185F]">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 bg-gradient-to-br from-[#A0185F] to-[#8B1550] rounded-xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#121212] mb-2">Nạp tiền điện thoại</h3>
                    <p class="text-gray-600">Nạp thẻ trả trước hoặc thanh toán cước trả sau cho tất cả nhà mạng</p>
                    <div class="mt-3 text-[#A0185F] font-semibold flex items-center gap-2">
                        Nạp ngay <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Mua gói Data -->
        <a href="/nap-tien-dien-thoai/nha-mang" class="block p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 border-l-4 border-[#A0185F]">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 bg-gradient-to-br from-[#A0185F] to-[#8B1550] rounded-xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#121212] mb-2">Mua gói Data 3G/4G/5G</h3>
                    <p class="text-gray-600">Đăng ký gói data theo ngày, tháng với tốc độ cao, không giới hạn</p>
                    <div class="mt-3 text-[#A0185F] font-semibold flex items-center gap-2">
                        Chọn gói <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- UU ĐÃI & THÔNG TIN -->
    <div class="bg-white rounded-2xl p-6 shadow-lg">
        <h2 class="text-lg font-bold text-[#121212] mb-6">UU ĐÃI & THÔNG TIN</h2>
        <div class="space-y-4">
            <div class="flex items-start gap-3 pb-4 border-b border-gray-100">
                <i class="fas fa-bolt text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Nạp tức thì</h3>
                    <p class="text-gray-600 text-sm">Thẻ kích hoạt trong vòng 30 giây</p>
                </div>
            </div>
            <div class="flex items-start gap-3 pb-4 border-b border-gray-100">
                <i class="fas fa-gift text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Điểm thưởng</h3>
                    <p class="text-gray-600 text-sm">Tích điểm MoMo mỗi giao dịch nạp tiền</p>
                </div>
            </div>
            <div class="flex items-start gap-3">
                <i class="fas fa-headset text-[#A0185F] text-xl mt-1"></i>
                <div>
                    <h3 class="font-semibold text-[#121212]">Hỗ trợ 24/7</h3>
                    <p class="text-gray-600 text-sm">Hotline 1900 5454 41 miễn phí</p>
                </div>
            </div>
        </div>
    </div>

    <!-- NAP GẦN ĐÂY -->
    <div class="mt-8 bg-white rounded-2xl p-6 shadow-lg">
        <h2 class="text-lg font-bold text-[#121212] mb-6">NAP GẦN ĐÂY</h2>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#EE3636] rounded-lg flex items-center justify-center text-white font-bold text-sm">VTT</div>
                    <div>
                        <p class="font-semibold text-[#121212]">0912***567</p>
                        <p class="text-sm text-gray-600">Nạp tiền</p>
                    </div>
                </div>
                <p class="font-semibold text-[#121212]">100.000đ</p>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#3B5BDB] rounded-lg flex items-center justify-center text-white font-bold text-sm">MBF</div>
                    <div>
                        <p class="font-semibold text-[#121212]">0378***891</p>
                        <p class="text-sm text-gray-600">Gói Data</p>
                    </div>
                </div>
                <p class="font-semibold text-[#121212]">V90</p>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#A0185F] rounded-lg flex items-center justify-center text-white font-bold text-sm">VNP</div>
                    <div>
                        <p class="font-semibold text-[#121212]">0912***567</p>
                        <p class="text-sm text-gray-600">Nạp tiền</p>
                    </div>
                </div>
                <p class="font-semibold text-[#121212]">50.000đ</p>
            </div>
        </div>
    </div>
</div>
@endsection
