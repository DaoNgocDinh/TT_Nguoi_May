@extends('global_layout.body')

@section('title', 'Chọn nhà mạng - Nạp tiền & Data')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8 text-center">
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-[#A0185F] mb-3">Chọn nhà mạng</p>
        <h1 class="text-4xl font-bold text-[#121212] mb-2">Chọn nhà mạng</h1>
        <p class="text-gray-600">Bước 2: Chọn nhà mạng cho dịch vụ nạp tiền hoặc mua Data</p>
    </div>

    <div class="mb-8 rounded-[30px] border border-gray-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-sm text-gray-500">Tiến trình</p>
                <p class="font-semibold text-[#A0185F]">Bước 2 / 6</p>
            </div>
            <div class="flex-1">
                <div class="h-3 rounded-full bg-gray-200 overflow-hidden">
                    <div class="h-3 rounded-full bg-[#A0185F]" style="width: 33%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <a href="/nap-tien-dien-thoai/so-dt" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-sim-card"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Viettel</h3>
            <p class="text-gray-600 mb-4">Mạng lớn nhất Việt Nam</p>
            <p class="text-sm text-gray-500">37 triệu thuê bao · 99% độ phủ</p>
        </a>

        <a href="/nap-tien-dien-thoai/so-dt" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-sim-card"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Vinaphone</h3>
            <p class="text-gray-600 mb-4">VNPT Group</p>
            <p class="text-sm text-gray-500">28 triệu thuê bao · Hỗ trợ nhanh</p>
        </a>

        <a href="/nap-tien-dien-thoai/so-dt" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-sim-card"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Mobifone</h3>
            <p class="text-gray-600 mb-4">Chất lượng 4G/5G</p>
            <p class="text-sm text-gray-500">22 triệu thuê bao · Mạng phủ rộng</p>
        </a>

        <a href="/nap-tien-dien-thoai/so-dt" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-sim-card"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Vietnamobile</h3>
            <p class="text-gray-600 mb-4">Giá cước ưu đãi</p>
            <p class="text-sm text-gray-500">8 triệu thuê bao · Phù hợp sim giá rẻ</p>
        </a>
    </div>

    <div class="flex justify-center">
        <a href="/nap-tien-dien-thoai" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 py-3 text-sm font-semibold text-gray-800 transition hover:bg-gray-50">
            <i class="fas fa-arrow-left mr-2"></i> Quay lại
        </a>
    </div>
</div>
@endsection
