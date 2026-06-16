@extends('global_layout.body')

@section('title', 'Quét mã QR - Thanh toán hóa đơn')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Quét mã QR hóa đơn</h1>
        <p class="text-gray-600">Bước 3: Quét mã QR trên hóa đơn giấy hoặc tải ảnh để tiếp tục thanh toán.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="rounded-[32px] border border-gray-200 bg-white shadow-xl p-8 text-center">
                <div class="mx-auto mb-6 flex h-28 w-28 items-center justify-center rounded-3xl bg-[#F0E6FA] text-[#8B1550] text-5xl">
                    <i class="fas fa-qrcode"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#121212] mb-3">Quét QR hóa đơn</h2>
                <p class="text-gray-600 mb-8">Hướng camera vào mã QR trên hóa đơn hoặc tải ảnh mã QR lên hệ thống.</p>

                <div class="grid gap-4 sm:grid-cols-2">
                    <button type="button" class="inline-flex items-center justify-center rounded-2xl border border-[#A0185F] px-6 py-4 text-sm font-semibold text-[#A0185F] hover:bg-[#F8E5FB] transition">
                        <i class="fas fa-camera mr-2"></i> Mở camera
                    </button>
                    <button type="button" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-gray-50 px-6 py-4 text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">
                        <i class="fas fa-upload mr-2"></i> Tải ảnh QR
                    </button>
                </div>

                <div class="mt-10 rounded-[28px] bg-[#F9F5FF] p-6 text-left">
                    <h3 class="text-lg font-semibold text-[#121212] mb-3">Lưu ý</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li>Chỉ quét mã QR xuất hiện trên hóa đơn chính thức.</li>
                        <li>Ảnh QR tải lên phải rõ nét, không bị mờ.</li>
                        <li>Hệ thống sẽ tự điền thông tin hóa đơn khi quét thành công.</li>
                    </ul>
                </div>
            </div>
        </div>

        <aside class="space-y-6">
            <div class="rounded-[32px] bg-gradient-to-br from-[#A0185F] to-[#8B1550] p-6 text-white shadow-lg">
                <h3 class="text-lg font-semibold mb-4">SỐ DỰ KHẢ DỤNG</h3>
                <p class="text-4xl font-bold mb-4">25.480.000đ</p>
                <p class="text-sm mb-2">Tài khoản</p>
                <p class="font-semibold text-lg">Nguyễn Văn A</p>
            </div>

            <div class="rounded-[32px] bg-white p-6 shadow-sm border border-gray-200">
                <h3 class="text-lg font-semibold text-[#121212] mb-4">Thông tin nhanh</h3>
                <div class="space-y-3 text-sm text-gray-600">
                    <div class="flex justify-between">
                        <span>Thời gian xử lý</span>
                        <span>30 giây</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Phí giao dịch</span>
                        <span>5.000đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Bảo mật</span>
                        <span>PIN & SSL</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:justify-between">
        <a href="/thanh-toan-hoa-don" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 py-4 text-sm font-semibold text-gray-800 hover:bg-gray-100 transition">
            <i class="fas fa-arrow-left mr-2"></i> Quay lại
        </a>
        <a href="/thanh-toan-hoa-don/xac-nhan" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-6 py-4 text-sm font-semibold text-white hover:from-[#8B1550] transition">
            Tiếp theo: Xác nhận hóa đơn
        </a>
    </div>
</div>
@endsection