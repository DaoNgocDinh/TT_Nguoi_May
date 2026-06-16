@extends('global_layout.body')

@section('title', 'Nhập số điện thoại - Nạp tiền & Data')

@section('body')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Nhập số điện thoại</h1>
        <p class="text-gray-600">Bước 3: Nhập số điện thoại cần nạp tiền hoặc mua Data</p>
    </div>

    <!-- Progress Bar -->
    <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 3</span> / 6</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 50%"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Nội dung chính (Cột trái) -->
        <div class="lg:col-span-2">
            <!-- Form nhập số -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
                <h2 class="text-lg font-bold text-[#121212] mb-6">Nhập số điện thoại</h2>
                
                <form action="/nap-tien-dien-thoai/chon-goi" method="get" class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#121212] mb-3">Số điện thoại</label>
                        <input type="tel" name="phone" placeholder="Nhập 10 chữ số (vd: 0912345678)" required pattern="\d{10}"
                               title="Vui lòng nhập đúng 10 chữ số"
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#A0185F] focus:outline-none transition text-lg">
                        <p class="text-xs text-gray-500 mt-2">Chỉ nhập số, không có dấu cách. Ví dụ: 0912345678</p>
                    </div>

                    <div class="mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <p class="text-sm text-blue-700"><i class="fas fa-info-circle mr-2"></i>Nhập số điện thoại đúng định dạng để tiếp tục.</p>
                    </div>

                    <div class="space-y-3">
                        <button type="submit" class="block w-full px-6 py-3 bg-gradient-to-r from-[#A0185F] to-[#8B1550] text-white rounded-lg font-semibold hover:shadow-lg transition">
                            Tiếp tục
                        </button>
                        <a href="/nap-tien-dien-thoai/nha-mang" class="block w-full px-6 py-3 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-center">
                            Quay lại
                        </a>
                    </div>
                </form>
            </div>

            <!-- Số điện thoại hay dùng -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-[#121212] mb-4">Số điện thoại hay dùng</h3>
                <div class="space-y-3">
                    <a href="/nap-tien-dien-thoai/chon-goi" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">0912***567</p>
                        <p class="text-sm text-gray-600">Nạp lần cuối: 5 ngày trước</p>
                    </a>
                    <a href="/nap-tien-dien-thoai/chon-goi" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">0378***891</p>
                        <p class="text-sm text-gray-600">Nạp lần cuối: 12 ngày trước</p>
                    </a>
                    <a href="/nap-tien-dien-thoai/chon-goi" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition border-l-4 border-[#A0185F] hover:bg-gray-50">
                        <p class="font-semibold text-[#121212]">0901***234</p>
                        <p class="text-sm text-gray-600">Nạp lần cuối: 25 ngày trước</p>
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
                <p class="font-semibold text-lg mb-6">Nguyễn Văn A - 0901234567</p>
                
                <hr class="border-pink-400 mb-6">
                
                <div class="text-sm space-y-3 mb-6">
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-wallet mr-2"></i>Tài khoản chính</span>
                        <span class="font-semibold">25.480.000đ</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-bolt mr-2"></i>Nạp tức thì</span>
                        <span class="text-xs bg-green-500 px-2 py-1 rounded">Thẻ kích hoạt trong 30 giây</span>
                    </div>
                </div>

                <a href="#" class="block w-full px-4 py-3 bg-white text-[#A0185F] rounded-lg font-semibold hover:bg-gray-100 transition text-center">
                    <i class="fas fa-plus mr-2"></i>Mua Data
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
