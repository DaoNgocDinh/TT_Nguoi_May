@extends('global_layout.body')

@section('title', 'Xác nhận - Thanh toán hóa đơn')

@section('body')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Xác nhận thanh toán</h1>
        <p class="text-gray-600">Bước 4: Kiểm tra lại thông tin hóa đơn</p>
    </div>

    <!-- Progress Bar -->
    <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 4</span> / 5</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 80%"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Thông tin hóa đơn (Cột trái) -->
        <div class="lg:col-span-2">
            <form action="/thanh-toan-hoa-don/xac-thuc" method="get" class="space-y-6">


                <!-- Header hóa đơn -->
                <div class="bg-gradient-to-r from-[#A0185F] to-[#8B1550] text-white rounded-2xl p-6 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="text-3xl"><i class="fas fa-wifi"></i></div>
                        <div>
                            <h2 class="text-xl font-bold mb-1">Internet · VNPT</h2>
                            <p class="text-sm opacity-90">Kỳ thanh toán 05/2026</p>
                        </div>
                    </div>
                </div>
                                <!-- Thông tin Hóa đơn -->
                <div class="mb-6 bg-white rounded-xl shadow-lg p-6">
                    <input type="hidden" name="customer_code" value="KH001234" />
                    <input type="hidden" name="invoice_type" value="internet" />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm text-gray-600">Mã khách hàng</label>
                            <p class="mt-2 rounded-2xl border border-gray-200 bg-slate-50 px-4 py-3 font-semibold text-[#121212]">KH001234</p>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600">Loại hóa đơn</label>
                            <p class="mt-2 rounded-2xl border border-gray-200 bg-slate-50 px-4 py-3 font-semibold text-[#121212]">Internet</p>
                        </div>
                    </div>
                </div>

                <!-- Chi tiết hóa đơn -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-[#121212] mb-6">CHI TIẾT GIAO DỊCH</h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Tên khách hàng</p>
                            <p class="font-semibold text-[#121212]">Nguyễn Văn A</p>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Mã hóa đơn</p>
                            <p class="font-semibold text-[#121212]">TXN89468492</p>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Kỳ thanh toán</p>
                            <p class="font-semibold text-[#121212]">05/2026</p>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Nhà cung cấp</p>
                            <p class="font-semibold text-[#121212]">VNPT</p>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Số tiền HD</p>
                            <p class="font-semibold text-[#121212]">385.000đ</p>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-gray-100">
                            <p class="text-gray-600">Phí giao dịch</p>
                            <p class="font-semibold text-[#121212]">5.000đ</p>
                        </div>
                        <div class="flex justify-between pt-4 text-lg">
                            <p class="font-bold text-[#121212]">Tổng</p>
                            <p class="font-bold text-[#A0185F]">390.000đ</p>
                        </div>
                    </div>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <a href="/thanh-toan-hoa-don/tra-cuu" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 py-4 text-sm font-semibold text-gray-800 hover:bg-gray-100 transition">
                            Quay lại
                        </a>
                        <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-6 py-4 text-sm font-semibold text-white hover:from-[#8B1550] transition">
                            Xác nhận thanh toán
                        </button>
                    </div>
                </div>

                <!-- Thông tin bảo mật -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <p class="text-sm text-green-700"><i class="fas fa-lock mr-2"></i>Giao dịch được bảo vệ bởi mã hóa SSL 256-bit</p>
                </div>
            </form>
        </div>

        <!-- Tóm tắt thanh toán -->
        <div>
            <div class="bg-gradient-to-br from-[#A0185F] to-[#8B1550] text-white rounded-2xl shadow-lg p-6 sticky top-4">
                <h3 class="text-lg font-bold mb-4">SỐ DỰ KHỎ DÙNG</h3>
                <p class="text-4xl font-bold mb-4">25.480.000đ</p>
                <p class="text-sm mb-4">Tài khoản</p>
                <p class="font-semibold text-lg mb-6">Nguyễn Văn A</p>
                
                <hr class="border-pink-400 mb-6">

            </div>
        </div>
    </div>

</div>
@endsection
