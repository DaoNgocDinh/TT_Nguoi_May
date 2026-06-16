@extends('global_layout.body')

@section('title', 'Chọn gói - Mua Data')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Chọn gói Data</h1>
        <p class="text-gray-600">Bước 4: Chọn gói Data bạn muốn mua</p>
    </div>

    <!-- Progress Bar -->
    <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 4</span> / 6</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 66%"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Nội dung chính (Cột trái) -->
        <div class="lg:col-span-2">
            <!-- Danh sách gói nạp -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <p class="text-sm text-gray-600">Số điện thoại</p>
                        <p class="font-semibold text-[#121212]">0912***567</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Nhà mạng</p>
                        <p class="font-semibold text-[#121212]">Viettel</p>
                    </div>
                </div>
                <h3 class="text-lg font-bold text-[#121212] mb-4">Chọn gói Data</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <!-- 10K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-pink-100 to-pink-50 border-2 border-pink-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">10K</p>
                <p class="text-xs text-gray-600 mt-1">10.000đ</p>
            </a>

            <!-- 20K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-purple-100 to-purple-50 border-2 border-purple-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">20K</p>
                <p class="text-xs text-gray-600 mt-1">20.000đ</p>
            </a>

            <!-- 50K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-blue-100 to-blue-50 border-2 border-blue-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">50K</p>
                <p class="text-xs text-gray-600 mt-1">50.000đ</p>
            </a>

            <!-- 100K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-green-100 to-green-50 border-2 border-green-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">100K</p>
                <p class="text-xs text-gray-600 mt-1">100.000đ</p>
            </a>

            <!-- 200K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-yellow-100 to-yellow-50 border-2 border-yellow-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">200K</p>
                <p class="text-xs text-gray-600 mt-1">200.000đ</p>
            </a>

            <!-- 500K -->
            <a href="/nap-tien-dien-thoai/xac-nhan" class="p-4 bg-gradient-to-br from-red-100 to-red-50 border-2 border-red-200 rounded-lg text-center hover:border-[#A0185F] hover:shadow-lg transition">
                <p class="text-2xl font-bold text-[#A0185F]">500K</p>
                <p class="text-xs text-gray-600 mt-1">500.000đ</p>
            </a>
                </div>
                <div class="mt-6 bg-[#F9F5F9] border border-[#E8D7E1] rounded-xl p-5">
                    <p class="text-sm text-gray-600 mb-3">Gói đã chọn</p>
                    <div class="flex items-center justify-between rounded-2xl bg-white p-4 shadow-sm mb-4">
                        <div>
                            <p class="text-sm text-gray-500">Mệnh giá</p>
                            <p class="font-semibold text-[#121212]">100.000đ</p>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#F9E0F0] text-[#A0185F] text-sm font-semibold">Đã chọn</span>
                    </div>
                    <div class="grid gap-4">
                        <a href="/nap-tien-dien-thoai/xac-nhan" class="block px-6 py-3 bg-[#A0185F] text-white rounded-lg font-semibold hover:bg-[#8B1550] transition text-center">
                            Xác nhận gói Data
                        </a>
                        <a href="/nap-tien-dien-thoai/so-dt" class="block px-6 py-3 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-center">
                            <i class="fas fa-arrow-left mr-2"></i> Quay lại
                        </a>
                    </div>
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
                
                <div class="text-sm space-y-2">
                    <div class="flex justify-between">
                        <span>Mệnh giá</span>
                        <span class="font-semibold">100.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
