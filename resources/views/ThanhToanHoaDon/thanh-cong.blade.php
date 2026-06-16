@extends('global_layout.body')

@section('title', 'Thanh toán thành công - Hóa đơn')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-3xl mx-auto">
        <div class="overflow-hidden rounded-[32px] border border-gray-100 bg-white shadow-2xl">
            <div class="bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-8 py-12 text-center text-white">
                <div class="mx-auto mb-6 flex h-24 w-24 items-center justify-center rounded-[28px] bg-white/15 text-white">
                    <i class="fas fa-check text-4xl"></i>
                </div>
                <h1 class="text-4xl font-bold">Thanh toán thành công!</h1>
                <p class="mt-3 text-sm text-white/80">Hóa đơn của bạn đã được xử lý thành công.</p>
            </div>

            <div class="px-8 py-8 sm:px-10 sm:py-10">
                <div class="grid gap-3 text-sm text-gray-600">
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Loại hóa đơn</p>
                        <p class="text-right font-semibold text-gray-900">Internet</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Khách hàng</p>
                        <p class="text-right font-semibold text-gray-900">Nguyễn Văn A</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Nhà cung cấp</p>
                        <p class="text-right font-semibold text-gray-900">VNPT</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Kỳ thanh toán</p>
                        <p class="text-right font-semibold text-gray-900">05/2026</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Mã giao dịch</p>
                        <p class="text-right font-semibold text-gray-900">TXN89468492</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Ngày giờ</p>
                        <p class="text-right font-semibold text-gray-900">12:57:48 16/6/2026</p>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 px-8 py-6 sm:px-10 sm:py-8 border-t border-gray-200 sm:flex sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-gray-700">Đã thanh toán</p>
                    <p class="mt-1 text-base text-gray-500">Số tiền đã trừ khỏi tài khoản của bạn.</p>
                </div>
                <div class="mt-4 sm:mt-0 text-right">
                    <p class="text-3xl font-bold text-[#A0185F]">390.000đ</p>
                </div>
            </div>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">
            <a href="/" class="block rounded-2xl border border-gray-200 bg-white px-6 py-4 text-center font-semibold text-gray-800 hover:bg-gray-50 transition">
                Về trang chủ
            </a>
            <a href="/thanh-toan-hoa-don" class="block rounded-2xl bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-6 py-4 text-center font-semibold text-white hover:from-[#8B1550] hover:to-[#6F1347] transition">
                Thanh toán hóa đơn mới
            </a>
        </div>
    </div>
</div>
@endsection
