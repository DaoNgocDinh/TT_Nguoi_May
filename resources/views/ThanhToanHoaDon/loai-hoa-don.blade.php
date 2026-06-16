@extends('global_layout.body')

@section('title', 'Chọn loại hóa đơn - Thanh toán')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8 text-center">
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-[#A0185F] mb-3">Thanh toán hóa đơn</p>
        <h1 class="text-4xl font-bold text-[#121212] mb-2">Chọn loại hóa đơn</h1>
        <p class="text-gray-600">Bước 2: Chọn loại hóa đơn cần thanh toán</p>
    </div>

    <div class="mb-8 rounded-[30px] border border-gray-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-sm text-gray-500">Tiến trình</p>
                <p class="font-semibold text-[#A0185F]">Bước 2 / 5</p>
            </div>
            <div class="flex-1">
                <div class="h-3 rounded-full bg-gray-200 overflow-hidden">
                    <div class="h-3 rounded-full bg-[#A0185F]" style="width: 40%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <a href="/thanh-toan-hoa-don/tra-cuu" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-bolt"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Tiền điện</h3>
            <p class="text-gray-600 mb-4">Thanh toán hóa đơn điện</p>
            <p class="text-sm text-gray-500">EVN - Tổng công ty Điện lực</p>
        </a>

        <a href="/thanh-toan-hoa-don/tra-cuu" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-droplet"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Tiền nước</h3>
            <p class="text-gray-600 mb-4">Thanh toán hóa đơn nước</p>
            <p class="text-sm text-gray-500">SAWACO - Cấp nước đô thị</p>
        </a>

        <a href="/thanh-toan-hoa-don/tra-cuu" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-wifi"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Internet</h3>
            <p class="text-gray-600 mb-4">Thanh toán hóa đơn Internet</p>
            <p class="text-sm text-gray-500">VNPT / FPT / Viettel</p>
        </a>

        <a href="/thanh-toan-hoa-don/tra-cuu" class="group block rounded-[28px] border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-[#A0185F]/10 text-[#A0185F] mb-5 text-2xl">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="text-2xl font-semibold text-[#121212] mb-2">Bảo hiểm</h3>
            <p class="text-gray-600 mb-4">Thanh toán bảo hiểm</p>
            <p class="text-sm text-gray-500">Bảo Việt / Prudential</p>
        </a>
    </div>

    <div class="flex justify-center">
        <a href="/thanh-toan-hoa-don" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 py-3 text-sm font-semibold text-gray-800 transition hover:bg-gray-50">
            <i class="fas fa-arrow-left mr-2"></i> Quay lại
        </a>
    </div>
</div>
@endsection
