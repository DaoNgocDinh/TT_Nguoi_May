@extends('global_layout.body')

@section('title', 'Giao dịch thành công - Nạp tiền & Data')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-3xl mx-auto">
        <div class="overflow-hidden rounded-[32px] border border-gray-100 bg-white shadow-2xl">
            <div class="bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-8 py-12 text-center text-white">
                <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-3xl bg-white/15 text-white">
                    <i class="fas fa-check text-3xl"></i>
                </div>
                <h1 class="text-4xl font-bold">Giao dịch thành công!</h1>
                <p class="mt-3 text-sm text-white/80">Hoàn tất lúc 12:58:55</p>
            </div>
            <div class="px-8 py-8 sm:px-10 sm:py-10">
                <div class="grid gap-3 text-sm text-gray-600">
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Nhà mạng</p>
                        <p class="text-right font-semibold text-gray-900">Vinaphone</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Số điện thoại</p>
                        <p class="text-right font-semibold text-gray-900">3423424244</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Mệnh giá</p>
                        <p class="text-right font-semibold text-gray-900">20.000đ</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Mã giao dịch</p>
                        <p class="text-right font-semibold text-gray-900">TXN89535383</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 rounded-3xl bg-slate-50 px-4 py-4">
                        <p class="col-span-2 font-medium text-gray-700">Ngày giờ</p>
                        <p class="text-right font-semibold text-gray-900">12:58:55 16/6/2026</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 px-8 py-6 sm:px-10 sm:py-8 border-t border-gray-200 sm:flex sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-gray-700">Đã thanh toán</p>
                </div>
                <div class="mt-4 sm:mt-0 text-right">
                    <p class="text-3xl font-bold text-[#A0185F]">20.000đ</p>
                </div>
            </div>
        </div>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
            <a href="/" class="block rounded-2xl border border-gray-200 bg-white px-6 py-4 text-center font-semibold text-gray-800 hover:bg-gray-50 transition">
                Về trang chủ
            </a>
            <a href="/nap-tien-dien-thoai" class="block rounded-2xl bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-6 py-4 text-center font-semibold text-white hover:from-[#8B1550] hover:to-[#6F1347] transition">
                Giao dịch mới
            </a>
        </div>
    </div>
</div>
@endsection
