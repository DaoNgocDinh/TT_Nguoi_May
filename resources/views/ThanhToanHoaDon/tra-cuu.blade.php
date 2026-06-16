@extends('global_layout.body')

@section('title', 'Tra cứu hóa đơn - Thanh toán')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Tra cứu hóa đơn</h1>
        <p class="text-gray-600">Bước 3: Nhập thông tin để tra cứu hóa đơn</p>
    </div>

    <!-- Progress Bar -->
    <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 3</span> / 5</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 60%"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Nội dung chính (Cột trái) -->
        <div class="lg:col-span-2">
            <!-- Form tra cứu -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
                <h2 class="text-lg font-bold text-[#121212] mb-6">Nhập thông tin tra cứu</h2>
                
                <form action="/thanh-toan-hoa-don/xac-nhan" method="get" class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#121212] mb-3">Mã khách hàng / Số hóa đơn</label>
                        <input type="text" name="invoice_code" placeholder="Nhập mã khách hoặc số hóa đơn" required minlength="3"
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#A0185F] focus:outline-none transition">
                        <p class="text-xs text-gray-500 mt-2">Không để trống. Ví dụ: KH-12345 hoặc HD-2026.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#121212] mb-3">Chọn loại hóa đơn</label>
                        <select name="invoice_type" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#A0185F] focus:outline-none transition">
                            <option value="">Chọn loại hóa đơn</option>
                            <option value="electric">Hóa đơn tiền điện</option>
                            <option value="water">Hóa đơn tiền nước</option>
                            <option value="internet">Hóa đơn Internet</option>
                            <option value="insurance">Hóa đơn bảo hiểm</option>
                        </select>
                    </div>

                    <div class="mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <p class="text-sm text-blue-700"><i class="fas fa-info-circle mr-2"></i>Hệ thống sẽ tìm kiếm thông tin hóa đơn của bạn.</p>
                    </div>

                    <div class="space-y-3">
                        <button type="submit" class="block w-full px-6 py-3 bg-gradient-to-r from-[#A0185F] to-[#8B1550] text-white rounded-lg font-semibold hover:shadow-lg transition">
                            Tiếp tục
                        </button>
                        <a href="/thanh-toan-hoa-don/loai-hoa-don" class="block w-full px-6 py-3 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-center">
                            Quay lại
                        </a>
                    </div>
                </form>
            </div>

            <!-- Hóa đơn gần đây -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-[#121212] mb-4">Hóa đơn gần đây</h3>
                <div class="space-y-3">
                    <a href="/thanh-toan-hoa-don/xac-nhan" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">Hóa đơn điện - 12/05</p>
                        <p class="text-sm text-gray-600">Mã khách: KH-12345</p>
                    </a>
                    <a href="/thanh-toan-hoa-don/xac-nhan" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">Hóa đơn nước - 10/05</p>
                        <p class="text-sm text-gray-600">Mã khách: KH-67890</p>
                    </a>
                    <a href="/thanh-toan-hoa-don/xac-nhan" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">Hóa đơn Internet - 08/05</p>
                        <p class="text-sm text-gray-600">Mã khách: KH-24680</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar phải -->
        <div>
            <div class="bg-gradient-to-br from-[#A0185F] to-[#8B1550] text-white rounded-2xl shadow-lg p-6 sticky top-4">
                <h3 class="text-lg font-bold mb-4">SỐ DỰ KHỎ DÙNG</h3>
                <p class="text-4xl font-bold mb-4">25.480.000đ</p>
                <p class="text-sm mb-4">Tài khoản</p>
                <p class="font-semibold text-lg mb-6">Nguyễn Văn A</p>
                
                <hr class="border-pink-400 mb-6">
                
                <div class="text-sm space-y-3 mb-6">
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-wallet mr-2"></i>Tài khoản chính</span>
                        <span class="font-semibold">25.480.000đ</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-piggy-bank mr-2"></i>Tiết kiệm</span>
                        <span class="font-semibold">5.000.000đ</span>
                    </div>
                </div>

                <a href="#" class="block w-full px-4 py-3 bg-white text-[#A0185F] rounded-lg font-semibold hover:bg-gray-100 transition text-center">
                    <i class="fas fa-plus mr-2"></i>Nạp tiền
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
